<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wochenkochplan extends Model
{
    protected $table= "wochenkochplans";
    protected $fillable = ['id', 'wochentag', 'portion'];

    /*Implementation Relation*/
    public function users(){
        return $this->belongsTo('App\User');
    }

    public function rezepts() {
        return $this->belongsToMany('App\Rezept');
    }
}
