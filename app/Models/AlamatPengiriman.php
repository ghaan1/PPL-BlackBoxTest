<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlamatPengiriman extends Model
{
    protected $table = 'alamat_pengiriman';
    protected $fillable = [
        'user_id',
        'status',
        'nama_penerima',
        'no_tlp',
        'alamat',
        'provinsi',
        'kota',
        'kecamatan',
        'kelurahan',
        'kodepos',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pesanan()
	{
		return $this->belongsTo('App\Models\Pesanan','alamat_pengiriman_id');
	}
}
