<?php
/**
 * Created by PhpStorm.
 * User: sana
 * Date: 18/02/2018
 * Time: 14:24
 */

namespace App\Http\Controllers;


use App\Stop;

class StopController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {

        $stops = Stop::all();

        return view('admin.stops.index', compact('stops'));

    }

    public function create() {

        return view('admin.stops.create');

    }

    public function store(Request $request) {

        $this->validate($request, [
            'stop_name'=> 'required',
            'stop_lat'=> 'required',
            'stop_lon'=> 'required'


        ]);
        //     $manager = Manager::findOrFail($id);


        $stop = new stop();

        $stop->stop_name = $request->stop_name;
        $stop->stop_lat = $request->stop_lat;
        $stop->stop_lon = $request->stop_lon;
       $stop->transport_id = $request->transport_id;

        $stop->save();

        return redirect()->route('stops.show', $stop);

    }

    public function show($id) {


        $stop = Stop::findOrFail($id);

        return view('admin.stops.show', compact('stop'));

    }

    public function edit($id) {

        $stop = Stop::findOrFail($id);

        return view('admin.stops.edit', compact('stop'));

    }

    public function update(Request $request, $id) {

        $stop = User::findOrFail($id);

        $stop->fill($request->all());
        $stop->save();

        return redirect()->route('stops.show', $user->id);

    }

    public function delete($id) {

        $stop = User::findOrFail($id);
        $stop->delete();

        return redirect()->route('stops.index');

    }


}