<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->default('');
            $table->dateTime('start')->nullable();
            $table->dateTime('end')->nullable();
            $table->decimal('goal', 10, 2)->default(0);
            $table->decimal('goal_saller', 10, 2)->default(0);
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
        Schema::dropIfExists('setting_events');
    }
}
