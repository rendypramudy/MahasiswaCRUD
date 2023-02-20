<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class M_mahasiswa extends Model
{
    use SoftDeletes;

    protected $table = 'mahasiswa';
    protected $fillable = [
        'nama',
        'nim',
        'alamat',
    ];

    protected $hidden;
}
