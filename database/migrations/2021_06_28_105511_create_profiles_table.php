<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('company_name', 80)->nullable();
            $table->string('username', 50);
            $table->string('email')->nullable();
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->mediumText('address')->nullable();
            $table->string('city', 50)->nullable();
            $table->string('country', 50)->nullable();
            $table->integer('pin_code')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
