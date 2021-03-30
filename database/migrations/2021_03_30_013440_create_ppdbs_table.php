<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpdbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppdbs', function (Blueprint $table) {
            $table->id();
            $table->integer ('nis');
            $table->string ('nama');
            $table->string ('jk');
            $table->string ('tempat_lahir');
            $table->date ('tgl_lahir');
            $table->string ('alamat');
            $table->string ('asal_skl');
            $table->string ('kelas');
            $table->string ('jurusan');
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
        Schema::dropIfExists('ppdbs');
    }
}
