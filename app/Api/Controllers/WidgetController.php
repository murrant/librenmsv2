<?php

namespace App\Api\Controllers;

use App\Models\Dashboard;
use App\Models\UsersWidgets;
use App\Models\Widget;
use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;

class WidgetController extends Controller
{
    use Helpers;

    public function __construct()
    {
    }

    /**
     * Display a listing of all widgets
     *
     * @param Request $request
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index(Request $request)
    {
        return Widget::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response|null
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response|null
     */
    public function store(Request $request)
    {
        $dashboard = Dashboard::find($request->dashboard_id);
        $row = $dashboard->widgets()->max('row') + 1;

        $user_widget = new UsersWidgets($request->all());
        $user_widget->user()->associate($request->user());
        $user_widget->row = $row;

        if ($dashboard->widgets()->save($user_widget)) {
            return $this->response->array(array('statusText' => 'OK', 'user_widget_id' => $user_widget->user_widget_id));
        } else {
            return $this->response->errorInternal();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response|null
     */
    public function show(Request $request, $id)
    {
        return Widget::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response|null
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->input('settings')) {
            $users_widgets = UsersWidgets::find($id);
            $users_widgets->settings = $request->input('settings');
        } else {
            $users_widgets = UsersWidgets::find($id);
            $users_widgets->col = $request->input('x');
            $users_widgets->row = $request->input('y');
            $users_widgets->size_x = $request->input('width');
            $users_widgets->size_y = $request->input('height');
        }

        if ($users_widgets->save()) {
            return $this->response->array(array('statusText' => 'OK'));
        } else {
            return $this->response->errorInternal();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response|null
     */
    public function destroy($id)
    {
        if (UsersWidgets::destroy($id)) {
            return $this->response->array(array('statusText' => 'OK'));
        } else {
            return $this->response->errorInternal();
        }
    }
}
