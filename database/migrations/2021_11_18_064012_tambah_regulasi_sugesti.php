<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahRegulasiSugesti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('status_approval_fraud', function (Blueprint $table) {
            $table->String('regulasi')->default('ON PROCESS');
            $table->String('sugesti')->default('ON PROCESS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('status_approval_fraud', function (Blueprint $table) {
            //
        });
    }
}
