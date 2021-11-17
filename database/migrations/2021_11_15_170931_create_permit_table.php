<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permit', function (Blueprint $table) {
            $table->string('id_permit')->primary();
            $table->string('tipe_perizinan');
            $table->string('lokasi');
            $table->string('spesifikasi');
            $table->text('alasan');

            $table->text('disposisi')->nullable();
            $table->text('dokumen1')->nullable();
            $table->text('dokumen2')->nullable();
            $table->text('dokumen3')->nullable();

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
        Schema::dropIfExists('permit');
    }
}
