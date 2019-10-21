<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AtestatProfile;
use Illuminate\Foundation\Auth\User;

class Course extends Model
{
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'course_title'
            ];

    public function profile()
    {
        return $this->hasOne('App\User');
    }
}