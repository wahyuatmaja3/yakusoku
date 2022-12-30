<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi_detail extends Model
{
    use HasFactory;

    protected $fillable = [
        "komik_id",
        "transaksi_id",
        "jumlah"
    ];

    static function tambahDetailTransaksi($komik_id, $transaksi_id, $jumlah) {
        Transaksi_detail::create([
            "komik_id" => $komik_id,
            "transaksi_id" => $transaksi_id,
            "jumlah" => $jumlah
        ]);
    }

    public function Transaksi() {
        return $this->belongsTo(Transaksi::class);
    }
}
