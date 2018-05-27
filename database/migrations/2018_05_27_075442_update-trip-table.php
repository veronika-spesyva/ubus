<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTripTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trips', function (Blueprint $table) {
            $table->integer('days');
            $table->dropColumn('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trips', function (Blueprint $table) {
            $table->dropColumn('days');
            $table->date('date');
        });
    }
}
