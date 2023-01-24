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
        Schema::table('trains', function (Blueprint $table) {
            $table->string("agency");
            $table->string("station_start");
            $table->string("station_end");
            $table->dateTime("start_at");
            $table->dateTime("arrived_at");
            $table->string("code");
            $table->integer("carriage");
            $table->boolean("in_time")->default(true);
            $table->boolean("deleted")->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn("agency");
            $table->dropColumn("station_start");
            $table->dropColumn("station_end");
            $table->dropColumn("start_at");
            $table->dropColumn("arrived_at");
            $table->dropColumn("code");
            $table->dropColumn("carriage");
            $table->dropColumn("in_time");
            $table->dropColumn("deleted");
        });
    }
};
