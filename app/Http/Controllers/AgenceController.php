<?php
/**
 * Created by PhpStorm.
 * User: sana
 * Date: 18/02/2018
 * Time: 13:11
 */

namespace App\Http\Controllers;


use App\Agence;

class AgenceController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {

        $agences = Agence::all();

        return view('admin.agences.index', compact('agences'));

    }

    public function create() {

        return view('admin.agences.create');

    }

    public function store(Request $request) {

        $this->validate($request, [
            'agence_name'=> 'required',
            'agence_url'=> 'required',
            'agence_timezone'=> 'required'


        ]);
        //     $manager = Manager::findOrFail($id);


        $agence = new agence();

        $agence->agence_name = $request->agence_name;
        $agence->agence_url = $request->agence_url;
        $agence->agence_timezone = $request->agence_timezone;

        $agence->save();

        return redirect()->route('agences.show', $agence);

    }

    public function show($id) {


        $agence = Agence::findOrFail($id);

        return view('admin.agences.show', compact('agence'));

    }

    public function edit($id) {

        $agence = Agence::findOrFail($id);

        return view('admin.agences.edit', compact('agence'));

    }

    public function update(Request $request, $id) {

        $agence = Agence::findOrFail($id);

        $agence->fill($request->all());
        $agence->save();

        return redirect()->route('agences.show', $agence->id);

    }

    public function delete($id) {

        $agence = Agence::findOrFail($id);
        $agence->delete();

        return redirect()->route('agences.index');

    }
}
