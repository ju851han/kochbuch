<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zutat extends Model
{
    protected $table =  "zutats";
    protected $fillable = ['zName','kostenjeEinheit','mengeneinheit','produktgruppe'];
    protected $casts =['zName' =>'string'];
    /*https://stackoverflow.com/questions/38463624/laravel-eloquent-model-id-as-string-return-wrong-value-in
    https://appdividend.com/2018/05/17/laravel-many-to-many-relationship-example/
    https://laravel.com/docs/7.x/eloquent-relationships#many-to-many*/
    protected $primaryKey='zName';

    /*Implementation Relations*/
    public function rezepts(){
        return $this->belongsToMany('App\Rezept');
    }
}
