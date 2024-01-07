<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table ="tb_transaksi";
    
    protected $primaryKey = "id_transaksi";

    protected $guarded = [];

    protected $fillabel = ['id_tansaksi,', 'id_siswa', 'id_bayar', 'jumlah_pembayaran', 'tanggal_pembayaran'];

    public static $rules = [

        'id_siswa' => 'required',
    ];

    protected $casts = [
    ];

    public function Siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa','siswa_id');
    }

    public function Bayar()
    {
        return $this->belongsTo(Bayar::class, 'id_bayar','bayar_id');
    }
}
