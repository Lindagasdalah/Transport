<?php
/**
 * Created by PhpStorm.
 * User: Linda
 * Date: 15/02/2018
 * Time: 21:31
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class StopTime extends Model
{
    protected $fillable=[
        'arrived_time',
        'departure_time',
        'stop_sequence',
/*'trip_id',
'stop_id'*/
    ];

    public function trip() {
        return $this->belongsTo('App\Trip');
    }
    public function stop() {
        return $this->belongsTo('App\Stop');
    }
}