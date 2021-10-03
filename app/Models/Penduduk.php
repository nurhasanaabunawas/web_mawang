<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;
    protected $fillable = [
		'nama',
    	'status',
    	'bulan',
    	'nama_lingkungan',
    	'jenis_kelamin',
    	'nik',
    	'kk',
    	'nama_ayah',
    	'nama_ibu',
    	'no_akta_kelahiran',
    	'usia',
    	'kota',
    ];
}
