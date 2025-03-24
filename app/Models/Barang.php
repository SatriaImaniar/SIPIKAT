<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'kategori',
        'nama',
        'serial_number',
        'pemilik_id',
        'status'
    ];

    public function pemilik()
    {
        return $this->belongsTo(User::class, 'pemilik_id');
    }
}
