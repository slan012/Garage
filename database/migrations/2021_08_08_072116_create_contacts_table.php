<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('adress');
            $table->string('zipcode');
            $table->string('city');
            $table->string('phone');
            $table->string('email');
            $table->timestamps();
        });

        DB::table('contacts')->insert(
            [
                'name' => 'Nom du garage',
                'adress' => 'Adresse',
                'zipcode' => '00000',
                'city' => 'Ville',
                'phone' => '0606060606',
                'email' => 'mail@domain.com'
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
        Schema::dropIfExists('contacts');
    }
}
