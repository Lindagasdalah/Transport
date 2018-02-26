<?php
/**
 * Created by PhpStorm.
 * User: sana
 * Date: 18/02/2018
 * Time: 14:22
 */

namespace App\Http\Controllers;


use App\StopTime;

class StopTimeController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {

        $stops_time = StopTime::all();

        return view('admin.stops_time.index', compact('stops_time'));

    }

    public function create() {

        return view('admin.stops_time.create');

    }

    public function store(Request $request) {

        $this->validate($request, [
            'arrived_time'=> 'required',
            'departure_time'=> 'required',
            'stop_sequence'=> 'required'


        ]);
        //     $manager = Manager::findOrFail($id);


        $stop_time = new stop_time();

        $stop_time->name = $request->arrived_time;
        $stop_time->email = $request->departure_time;
        $stop_time->password = $request->stop_sequence;
        $stop_time->trip_id = $request->trip_id;
        $stop_time->stop_id = $request->stop_id;

        $stop_time->save();

        return redirect()->route('stops_time.show', $stop_time);

    }

    public function show($id) {


        $stop_time = StopTime::findOrFail($id);

        return view('admin.stop_time.show', compact('stop_time'));

    }

    public function edit($id) {

        $stop_time = StopTime::findOrFail($id);

        return view('admin.stop_time.edit', compact('stop_time'));

    }

    public function update(Request $request, $id) {

        $stop_time = StopTime::findOrFail($id);

        $stop_time->fill($request->all());
        $stop_time->save();

        return redirect()->route('users.show', $stop_time->id);

    }

    public function delete($id) {

        $stop_time = StopTime::findOrFail($id);
        $stop_time->delete();

        return redirect()->route('stops_time.index');

    }

}