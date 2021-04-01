<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'nis', 'name', 'jk', 'trmpat_lahir', 'tanggal_lahir', 'alamat', 'asal_sekolah', 'kelas', 'jurusan'
    ];
}
