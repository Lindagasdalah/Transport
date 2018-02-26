<?php
/**
 * Created by PhpStorm.
 * User: Linda
 * Date: 15/02/2018
 * Time: 21:21
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
    protected $fillable=[
        'stop_name',
        'stop_lat',
        'stop_lon'
        //'transport_id'
    ];

    public function transportType() {
        return $this->belongsTo('App\Transport_types');
    }
}