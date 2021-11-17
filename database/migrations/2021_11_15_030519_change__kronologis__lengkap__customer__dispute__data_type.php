<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeKronologisLengkapCustomerDisputeDataType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customer_dispute', function (Blueprint $table) {
         $table->text('Kronologis_Lengkap')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customer_dispute', function (Blueprint $table) {
              $table->dropColumn('Kronologis_Lengkap');
        });
    }
}
