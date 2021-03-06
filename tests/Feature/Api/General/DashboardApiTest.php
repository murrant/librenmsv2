<?php
/**
 * tests/api/general/OverviewApiTest.php
 *
 * Test unit for overview/dashboard api
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package    LibreNMS
 * @link       http://librenms.org
 * @copyright  2016 Neil Lathwood
 * @author     Neil Lathwood <neil@lathwood.co.uk>
 */
namespace Tests\Feature\Api\General;

use App\Models\Dashboard;
use App\Models\User;
use App\Models\UsersWidgets;
use App\Models\Widgets;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Response;
use JWTAuth;
use Tests\TestCase;

class DashboardApiTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Test overview api
    **/

    public function testDashboardsApi()
    {
        $user = factory(User::class)->create();
        $dashboard_name = 'Test Dashboard';

        $jwt = JWTAuth::fromUser($user);
        $data = ['user_id' => $user->user_id, 'name' => $dashboard_name, 'access' => '0'];
        $headers = ['HTTP_ACCEPT' => 'application/vnd.' . env('API_VENDOR', '') . '.v1+json'];

        $this->json('POST', '/api/dashboard?token='.$jwt, array_merge($data, $headers))
            ->assertStatus(Response::HTTP_OK)
            ->assertJson(['statusText' => 'OK']);

        $this->json('GET', '/api/dashboard?token='.$jwt, $headers)
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonFragment(['dashboard_name' => $dashboard_name]);
    }

    public function testWidgetsApi()
    {
        $user = factory(User::class)->create();
        $jwt = JWTAuth::fromUser($user);
        $widget = factory(Widgets::class)->create();

        $headers = [
            'HTTP_ACCEPT' => 'application/vnd.' . env('API_VENDOR', '') . '.v1+json'
        ];
        $this->get('/api/widget?token='.$jwt, $headers)
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonFragment(['widget_title' => $widget->widget_title]);
    }

    public function testUserWidgetsApi()
    {
        $user = factory(User::class)->create();
        $dashboard = factory(Dashboard::class)->make();
        $user->dashboards()->save($dashboard);

        $widget = factory(UsersWidgets::class)->make();
        $widget->user()->associate($user->user_id);
        $dashboard->widgets()->save($widget);

        $jwt = JWTAuth::fromUser($user);


        $headers = [
            'HTTP_ACCEPT' => 'application/vnd.' . env('API_VENDOR', '') . '.v1+json'
        ];
        $this->delete('/api/widget/'.$widget->user_widget_id.'?token='.$jwt, $headers)
            ->assertStatus(Response::HTTP_OK);
        $this->delete('/api/widget/'.$widget->user_widget_id.'?token='.$jwt, $headers)
            ->assertStatus(Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
