<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    use HasFactory;
    protected $table = 'jabatans';

    public function ListPegawai()
    {
        return $this->belongsTo(ListPegawai::class);
    }
}
