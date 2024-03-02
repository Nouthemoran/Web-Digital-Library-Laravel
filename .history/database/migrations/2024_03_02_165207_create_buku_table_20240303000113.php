<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->bigIncrements('BukuID'); // Mengatur kolom primary key dengan nama BukuID
            $table->string('Judul');
            $table->unsignedBigInteger('KategoriID'); // Menyesuaikan dengan tipe data yang cocok
            $table->string('Penulis');
            $table->string('Penerbit');
            $table->unsignedSmallInteger('TahunTerbit'); // Menyesuaikan dengan tipe data yang cocok
            $table->timestamps();

            // Menambahkan foreign key constraint untuk KategoriID
            $table->foreign('KategoriID')->references('KategoriID')->on('Kategoribuku')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('buku');
    }
};
