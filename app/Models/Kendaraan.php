
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $fillable = [
        'jenis', 
        'nama', 
        'nopol', 
        'terakhir_service', 
        'berlaku_stnk', 
        'berlaku_plat',
        'berlaku_plat'

    ];
}




//  "(MODEL/KENDARAAN.php) LENGKAP JRE DEEPSEEK"

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// use Carbon\Carbon;

// class Kendaraan extends Model
// {
//     use HasFactory;

//     protected $table = 'kendaraan';
//     protected $primaryKey = 'id';
    
//     /**
//      * Kolom yang bisa diisi (mass assignment)
//      */
//     protected $fillable = [
//         'jenis',         // mobil/motor
//         'nama',          // nama kendaraan (contoh: "Avanza Hitam")
//         'nopol',         // nomor polisi
//         'terakhir_service',
//         'berlaku_stnk',
//         'berlaku_plat',
//         'keterangan'
//     ];

//     /**
//      * Casting format tanggal
//      */
//     protected $dates = [
//         'terakhir_service',
//         'berlaku_stnk',
//         'berlaku_plat',
//         'created_at',
//         'updated_at'
//     ];

//     /**
//      * Accessor untuk cek perlu service
//      */
//     public function getPerluServiceAttribute()
//     {
//         // Jika lebih dari 6 bulan sejak terakhir service
//         return $this->terakhir_service->diffInMonths(now()) > 6;
//     }

//     /**
//      * Accessor untuk sisa hari STNK
//      */
//     public function getSisaStnkAttribute()
//     {
//         return now()->diffInDays($this->berlaku_stnk, false);
//     }

//     /**
//      * Scope untuk mobil
//      */
//     public function scopeMobil($query)
//     {
//         return $query->where('jenis', 'mobil');
//     }

//     /**
//      * Scope untuk motor
//      */
//     public function scopeMotor($query)
//     {
//         return $query->where('jenis', 'motor');
//     }

//     /**
//      * Aturan validasi
//      */
//     public static function rules()
//     {
//         return [
//             'nama' => 'required|string|max:100',
//             'nopol' => 'required|unique:kendaraan,nopol',
//             'terakhir_service' => 'required|date',
//             'berlaku_stnk' => 'required|date|after:today',
//             'berlaku_plat' => 'required|date|after:today'
//         ];
//     }
// }