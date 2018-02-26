<?php
/**
 * Created by PhpStorm.
 * User: Linda
 * Date: 15/02/2018
 * Time: 21:09
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    protected $fillable=[
        'agence_name',
         'agence_url',
         'agence_timezone'
    ];
    public function agence() {
        return $this->belongsTo('App\Agence');
    }

}