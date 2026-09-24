<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    protected $fillable = [
        'nama_project',
        'kategori_project',
        'asal_peserta',
        'deskripsi',
        'thumbnail',
        'tanggal',
    ];
}