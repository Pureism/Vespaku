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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('nip');
            $table->string('username')->unique();
            $table->string('password', 75);
            $table->string('email', 75);
            $table->date('tanggal_lahir');
            $table->string('foto', 75);
            $table->string('user_type', 15);
            // $table->string('seeder', 1);
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
        Schema::dropIfExists('users');
    }
};
