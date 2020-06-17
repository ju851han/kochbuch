<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rezept extends Model
{
    protected $table =  "rezepts";
    protected $fillable = ['rID','rName','kategorie','zeit','kostenjePortion','zubereitung'];
}
