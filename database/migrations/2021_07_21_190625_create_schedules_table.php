<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('day');
            $table->boolean('closedMorning')->default(0);
            $table->boolean('closedAfternoon')->default(0);
            $table->char('morningOpenH', 2)->default('00');
            $table->char('morningOpenM', 2)->default('00');
            $table->char('morningCloseH', 2)->default('00');
            $table->char('morningCloseM', 2)->default('00');
            $table->char('afternoonOpenH', 2)->default('00');
            $table->char('afternoonOpenM', 2)->default('00');
            $table->char('afternoonCloseH', 2)->default('00');
            $table->char('afternoonCloseM', 2)->default('00');
            $table->timestamps();
        });

        DB::table('schedules')->insert(
            [
                'day' => 'Lundi',
                'closedMorning' => 0,
                'closedAfternoon' => 0,
                'morningOpenH' => '00',
                'morningOpenM' => '00',
                'morningCloseH' => '00',
                'morningCloseM' => '00',
                'afternoonOpenH' => '00',
                'afternoonOpenM' => '00',
                'afternoonCloseH' => '00',
                'afternoonCloseM' => '00',

            ]
        );
        DB::table('schedules')->insert(
            [
                'day' => 'Mardi',
                'closedMorning' => 0,
                'closedAfternoon' => 0,
                'morningOpenH' => '00',
                'morningOpenM' => '00',
                'morningCloseH' => '00',
                'morningCloseM' => '00',
                'afternoonOpenH' => '00',
                'afternoonOpenM' => '00',
                'afternoonCloseH' => '00',
                'afternoonCloseM' => '00',

            ]
        );
        DB::table('schedules')->insert(
            [
                'day' => 'Mercredi',
                'closedMorning' => 0,
                'closedAfternoon' => 0,
                'morningOpenH' => '00',
                'morningOpenM' => '00',
                'morningCloseH' => '00',
                'morningCloseM' => '00',
                'afternoonOpenH' => '00',
                'afternoonOpenM' => '00',
                'afternoonCloseH' => '00',
                'afternoonCloseM' => '00',

            ]
        );
        DB::table('schedules')->insert(
            [
                'day' => 'Jeudi',
                'closedMorning' => 0,
                'closedAfternoon' => 0,
                'morningOpenH' => '00',
                'morningOpenM' => '00',
                'morningCloseH' => '00',
                'morningCloseM' => '00',
                'afternoonOpenH' => '00',
                'afternoonOpenM' => '00',
                'afternoonCloseH' => '00',
                'afternoonCloseM' => '00',

            ]
        );
        DB::table('schedules')->insert(
            [
                'day' => 'Vendredi',
                'closedMorning' => 0,
                'closedAfternoon' => 0,
                'morningOpenH' => '00',
                'morningOpenM' => '00',
                'morningCloseH' => '00',
                'morningCloseM' => '00',
                'afternoonOpenH' => '00',
                'afternoonOpenM' => '00',
                'afternoonCloseH' => '00',
                'afternoonCloseM' => '00',

            ]
        );
        DB::table('schedules')->insert(
            [
                'day' => 'Samedi',
                'closedMorning' => 0,
                'closedAfternoon' => 0,
                'morningOpenH' => '00',
                'morningOpenM' => '00',
                'morningCloseH' => '00',
                'morningCloseM' => '00',
                'afternoonOpenH' => '00',
                'afternoonOpenM' => '00',
                'afternoonCloseH' => '00',
                'afternoonCloseM' => '00',

            ]
        );
        DB::table('schedules')->insert(
            [
                'day' => 'Dimanche',
                'closedMorning' => 0,
                'closedAfternoon' => 0,
                'morningOpenH' => '00',
                'morningOpenM' => '00',
                'morningCloseH' => '00',
                'morningCloseM' => '00',
                'afternoonOpenH' => '00',
                'afternoonOpenM' => '00',
                'afternoonCloseH' => '00',
                'afternoonCloseM' => '00',

            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
