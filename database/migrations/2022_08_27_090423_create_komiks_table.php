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
        Schema::create("komiks", function (Blueprint $table) {
            $table->id("id");
            $table->foreignId("genreId");
            $table->string("judul", 500);
            $table->year("tahunTerbit");
            $table->bigInteger("harga");
            $table->integer("stok")->nullable()->default(0);
            $table->char("isbn", 13);
            $table->string("img")->nullable()->default("cover.jpg");
            $table->string("author")->nullable()->default("Author");
            $table->timestamps();
            
            // Foreign key
            // $table->foreign("kategori")->references("id_kategori")->on("kategori");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komiks');
    }
};
