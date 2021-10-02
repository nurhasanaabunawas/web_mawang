<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemerintahan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nip',
        'jabatan',
        'jenis_kelamin',
        'alamat'
    ];
}
