<?php
/**
 * Created by PhpStorm.
 * User: Linda
 * Date: 15/02/2018
 * Time: 13:25
 */

namespace App\Http\Controllers;

use App\Route;
use Illuminate\Http\Request;

class RouteController extends Controller

{

    public function index() {

        $routes = Route::all();

        return view('admin.routes.index', compact('routes'));

    }

    public function create() {

        return view('admin.routes.create');

    }

    public function store(Request $request) {

        $this->validate($request, [
            'route_Sname'=> 'required',
            'route_Lname'=> 'required',
            'route_desc'=> 'required',
            'route_type'=> 'required',
            'route_color'=> 'required|numeric',
            'route_txtColor'=> 'required',

        ]);
        //     $manager = Manager::findOrFail($id);


        $route = new Route();

        $route->route_Sname = $request->route_Sname;
        $route->route_Lname = $request->route_Lname;
        $route->route_desc = $request->route_desc;
        $route->route_type = $request->route_type;
        $route->route_color = $request->route_color;
        $route->route_txtColor = $request->route_txtColor;

        // $route->station_id = 1;
        $route->agence_id = $request->agence_id;
        $route->save();

        return redirect()->route('routes.show', $route);

    }

    public function show($id) {


        $route = Route::findOrFail($id);

        return view('admin.routes.show', compact('route'));

    }

    public function edit($id) {

        $route = Route::findOrFail($id);

        return view('admin.routes.edit', compact('route'));

    }

    public function update(Request $request, $id) {

        $route = Route::findOrFail($id);

        $route->fill($request->all());
        $route->save();

        return redirect()->route('routes.show', $route->id);

    }

    public function delete($id) {

        $route = Route::findOrFail($id);
        $route->delete();

        return redirect()->route('routes.index');

    }


}