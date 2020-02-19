<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa_tabel';
    protected $fillable = ['id','nama', 'kelas', 'alamat', 'foto'];
}
