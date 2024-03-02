<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoribukuTable extends Migration
{
    public function up()
    {
        Schema::create('kategoribuku', function (Blueprint $table) {
            $table->bigIncrements('KategoriID'); // Mengatur kolom primary key dengan tipe data BIGINT UNSIGNED
            $table->string('NamaKategori');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kategoribuku');
    }
}
