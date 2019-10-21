<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Inputforms extends Model
{
    protected $fillable = ['diagnoses', 'num_card','apdate','fio'];


  public function user()
    {
        return $this->hasMany('App\User');
    }
}