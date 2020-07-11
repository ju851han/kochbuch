<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zutat extends Model
{
    protected $table = "zutats";
    protected $fillable = ['zName', 'kostenjeEinheit', 'mengeneinheit', 'produktgruppe'];
    protected $casts = ['zName' => 'string'];
    protected $primaryKey = 'zName';

    /*Implementation Relations*/
    public function rezepts()
    {
        return $this->belongsToMany(Rezept::class)->withPivot('menge');
    }
}
