<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function pangkat() {
        return $this->belongsTo(Pangkat::class);
    }

    public function jabatan() {
        return $this->belongsTo(Jabatan::class);
    }

    public function jenis_jabatan() {
        return $this->belongsTo(JenisJabatan::class);
    }
}