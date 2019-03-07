<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewColumnsToPreregisters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('preregisters', function (Blueprint $table) {
            $table->string('district')->after('field');
            $table->string('father_mobile')->after('district');
            $table->string('mother_mobile')->after('father_mobile');
            $table->string('school')->after('mother_mobile');
            $table->string('average')->after('school');
            $table->string('in_touch')->after('average');
            $table->string('filler')->after('in_touch');
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
            $table->dropColumn('district');
            $table->dropColumn('father_mobile');
            $table->dropColumn('mother_mobile');
            $table->dropColumn('mother_mobile');
            $table->dropColumn('school');
            $table->dropColumn('average');
            $table->dropColumn('in_touch');
            $table->dropColumn('filler');
        });
    }
}
