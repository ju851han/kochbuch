<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zutat extends Model
{
    protected $table =  "zutats";
    protected $fillable = ['zName','kostenjeEinheit','mengeneinheit','produktgruppe'];
    protected $primaryKey='zName';

}
