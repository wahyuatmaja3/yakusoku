<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Transaksi_detail;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_transaksi',
        'user_id'
    ];

    static function tambahTransaksi() {
        $transaksi = Transaksi::create([
            "tanggal_transaksi" => date('Y-m-d'),
            "user_id" => auth()->user()->id
        ]);

        return $transaksi->id;
    }

    public function detailTransaksi() {
        return $this->hasMany(Transaksi_detail::class);
    }
}
