<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kochbuch extends Model
{
    protected $table =  "kochbuches";
    protected $fillable = ['kID','kName','erstelltam','aktualisiertam'];
    protected $primaryKey='kID';

    /* TODO Relationen einbinden
    public function rezepts() {
        return $this->hasMany('App\Rezept');
    }*/
}
