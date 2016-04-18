<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('profiles', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('country');
            $table->string('location');
            $table->string('marital_status');
            $table->date('birth_date');
            $table->string('hight');
            $table->string('body_type');
            $table->string('eyes');
            $table->string('hair');
            $table->text('abouts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('profiles');
    }

}
