<?php
/**
 * Created by PhpStorm.
 * User: Linda
 * Date: 15/02/2018
 * Time: 21:27
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{

    protected $fillable=[
        'trip_name'
      /*  'route_id',
        'service_id'*/
    ];

    public function route() {
        return $this->belongsTo('App\Route');
    }
    public function calender() {
        return $this->belongsTo('App\Calender');
    }
}