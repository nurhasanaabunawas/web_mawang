<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wilayahAdmin extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_wilayah',
        'nama_ketua_rw',
        'nama_ketua_rt',
        'rw',
        'rt'
    ];
}
