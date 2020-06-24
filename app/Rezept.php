<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rezept extends Model
{
    protected $table = "rezepts";
    protected $fillable = ['rID', 'rName', 'kategorie', 'zeit', 'kostenjePortion', 'zubereitung'];
    protected $primaryKey = 'rID';

    /*Implementation Relations*/
    public function kochbuches()
    {
        return $this->belongsToMany('App\Kochbuch');
    }

    public function zutats()
    {
        return $this->belongsToMany('App\Zutat')->withPivot('menge');
    }

    public function wochenkochplans() {
        return $this->belongsToMany('App\Wochenkochplan');
    }
}
