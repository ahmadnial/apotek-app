<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;

    protected $table = 'distributor';
    protected $fillable = [
        'Nama_Suplier', 'alamat', 'Kota_Suplier', 'Provinsi_Suplier', 'Kode_POS_Suplier', 'Email_Suplier', 'No_HP_Suplier',
        'NPWP_Suplier', 'petugas'
    ];
}
