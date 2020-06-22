<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kochbuch extends Model
{
    protected $table =  "kochbuches";
    protected $fillable = ['kID','kName','erstelltam','aktualisiertam'];
    protected $primaryKey='kID';

    /*Implementation Relations*/
    public function users(){
        return $this->belongsTo('App\User');
    }

    public function rezepts() {
        return $this->belongsToMany('App\Rezept');
    }
}
