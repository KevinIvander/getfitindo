<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Enduser extends Model
{
    protected $table = 'endusers';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = ['id'];
    protected $fillable = ['name',
                            'username',
                            'password',
                            'email',
                            'profil_picture',
                            'address',
                            'mobile_number',
                            'entry_date',
                            'active_until',
                            'point',
                            'payment_proof',
                            'active_status'];
}
