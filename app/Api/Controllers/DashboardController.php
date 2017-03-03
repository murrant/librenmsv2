<?php

namespace App\Api\Controllers;

use App\Models\Dashboard;
use App\Models\Widget;
use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;
use Validator;

class DashboardController extends Controller
{

    use Helpers;

    public function __construct()
    {
    }

    /**
     * Display a listing of all authorized devices
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $request->user()->dashboards()->withGlobal()->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response|null
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'access' => 'required',
        ]);
        if ($validation->passes()) {
            $dashboard = $request->user()->dashboards()->create([
                'dashboard_name' => $request->name,
                'access'         => $request->access,
            ]);

            if ($dashboard) {
                if (is_numeric($request->copy_from)) {
                    Dashboard::find($request->copy_from)->widgets->each(function (Widget $widget) use ($dashboard) {
                        $dashboard->widgets()->save($widget->replicate());
                    });

                }
                return $this->response->array(array('statusText' => 'OK', 'dashboard_id' => $dashboard->dashboard_id));
            } else {
                return $this->response->errorInternal();
            }
        } else {
            $errors = $validation->errors();
            return response()->json($errors, 422);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $dashboard = Dashboard::find($id);
        $widgets = $dashboard->widgets;

        return array('dashboard' => $dashboard, 'widgets' => $widgets);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'access' => 'required',
        ]);
        if ($validation->passes()) {
            $dashboard = Dashboard::find($id);
            $dashboard->dashboard_name = $request->name;
            $dashboard->access         = $request->access;
            if ($dashboard->save()) {
                return $this->response->array(array('statusText' => 'OK'));
            } else {
                return $this->response->errorInternal();
            }
        } else {
            $errors = $validation->errors();
            return response()->json($errors, 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->user()->dashboards()->where('dashboard_id', $id)->delete()) {
            if (Widget::where('dashboard_id', $id)->delete() >= 0) {
                return $this->response->array(array('statusText' => 'OK'));
            } else {
                return $this->response->errorInternal();
            }
        } else {
            return $this->response->errorInternal();
        }
    }

    public function clear($id)
    {
        if (Dashboard::find($id)->widgets()->delete() >= 0) {
            return $this->response->array(array('statusText' => 'OK'));
        } else {
            return $this->response->errorInternal();
        }
    }
}
