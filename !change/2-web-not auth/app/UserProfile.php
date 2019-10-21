<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
         'user_id', 'email', 'surname', 'name', 'lastname', 'gender', 'surnamefirst', 'fullname_en',
         'country', 'city', 'village', 'index', 'adress', 'house', 'apartment', 'telc', 'telm',
         'country1', 'city1', 'village1', 'index1', 'adres1', 'house1', 'apartment1', 
         'country2', 'city2', 'village2', 'index2', 'adres2', 'tel1',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
