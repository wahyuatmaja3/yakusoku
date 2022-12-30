<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            // $table->foreignId("shipping_id")->constrained("shippings")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId("shipping_id")->cascadeOnUpdate()->cascadeOnDelete();
            $table->string("alamat");
            $table->integer("harga");
            $table->date("tanggal_transaksi");
            $table->char('status', 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
};
