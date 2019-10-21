<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DownloadProfile
 * @package App
 */
class DownloadProfile extends Model
{

    public $timestamps = false;
	
    /**
     * @var array
     */
    protected $fillable = [
        'id_student', 'pasport', 'diplom', 'ident_code', 'diplom_compl',
        'certificate', 'health_book', 'foto'
    ];

}
