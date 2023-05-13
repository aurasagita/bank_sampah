<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NasabahModel extends Model
{
    use HasFactory;
    protected $table = 'nasabah';
    protected $fillable = [
        'id_nasabah', 'nama', 'alamat', 'phone'
    ];

    public function jadwal_nasabah() {
        return $this->hasMany(JadwalModel::class, 'id_nasabah', 'id_nasabah');
    }
}
