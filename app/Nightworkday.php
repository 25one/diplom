<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nightworkday extends Model
{
     protected $fillable = ['diagnoses', 'num_card','apdate','fio','work','station'];
}
