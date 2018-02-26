<?php
/**
 * Created by PhpStorm.
 * User: Linda
 * Date: 15/02/2018
 * Time: 20:50
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = [

        'route_Sname',
        'route_Lname',
        'route_desc',
        'route_type',
        'route_color',
         'route_txtColor',
         //'agence_id'

    ];

    public function agence() {
        return $this->belongsTo('App\Route');
    }
}