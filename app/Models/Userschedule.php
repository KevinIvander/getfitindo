<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Userschedule extends Model
{
    protected $table = 'userschedules';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = ['id'];
    protected $fillable = ['username',
                            'day',
                            'session'];
}
