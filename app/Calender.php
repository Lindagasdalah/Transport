<?php
/**
 * Created by PhpStorm.
 * User: Linda
 * Date: 15/02/2018
 * Time: 21:17
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Calender extends Model
{
    protected $fillable =[
        'lundi',
        'mardi',
        'mercredi',
        'jeudi',
        'vendredi',
        'samedi',
        'dimanche'
    ];

}