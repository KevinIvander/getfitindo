<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = ['id'];
    protected $fillable = ['name',
                            'profil_picture',
                            'dob',
                            'pob',
                            'hobby',
                            'experience',
                            'specialization',
                            'position'];
}
