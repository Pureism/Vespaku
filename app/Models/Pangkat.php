<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pangkat extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function pegawai() {
        return $this->belongsToMany(Pegawai::class);
    }
    
    public function pangkat_pegawai(){
        return $this->hasMany(PangkatPegawai::class);
    }
}
