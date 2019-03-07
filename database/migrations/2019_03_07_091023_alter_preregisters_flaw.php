<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPreregistersFlaw extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('preregisters', function (Blueprint $table) {
            $table->dropUnique(['phone']);
            $table->dropUnique(['mobile']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('preregisters', function (Blueprint $table) {
            $table->unique('phone');
            $table->unique('mobile');
        });
    }
}
