<?php

namespace App\Models;

use App\Models\Jabatan;
use App\Models\Golongan;
use App\Models\Fungsional;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pegawai extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
    public function golongan()
    {
        return $this->hasMany(Golongan::class);
    }

    public function fungsional()
    {
        return $this->hasMany(Fungsional::class);
    }
    public function unit_kerja()
    {
        return $this->hasMany(unit_kerja::class);
    }

}
