<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NasabahModel extends Model
{
    use HasFactory;
    protected $table = 'nasabah';
    protected $fillable = [
        'id_nasabah', 'nama', 'alamat', 'phone','email','password'
    ];

    public function jadwal() {
        return $this->belongsTo(JadwalModel::class, 'id_nasabah', 'id_nasabah');
    }
    public function nasabah(){
        return $this->belongsTo(NasabahModel::class, 'id_nasabah', 'id');
    }
}
