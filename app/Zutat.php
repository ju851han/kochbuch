<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zutat extends Model
{
    protected $table =  "zutats";
    protected $fillable = ['zName','kostenjeEinheit','mengeneinheit','produktgruppe'];
    protected $casts =['zName' =>'string'];
    /*https://stackoverflow.com/questions/38463624/laravel-eloquent-model-id-as-string-return-wrong-value-in*/
    protected $primaryKey='zName';

}
