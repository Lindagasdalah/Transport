<?php
/**
 * Created by PhpStorm.
 * User: sana
 * Date: 18/02/2018
 * Time: 18:36
 */

namespace App\Http\Controllers;


use App\Transport_type;

class TransportController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {

        $transport_types = Transport_type::all();

        return view('admin.transport_types.index', compact('transport_types'));

    }



}