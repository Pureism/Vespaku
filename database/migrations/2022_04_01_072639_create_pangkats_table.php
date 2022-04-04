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
        Schema::create('pangkats', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    // * Template Insert Data *
    // Pangkat::create([
    //     'nama' => 'Pengatur Muda TK I/ IV B',
    //     'slug' => 'pengatur-muda-tk-i-iv-b',
    // ])
    // Pangkat::create([
    //     'nama' => 'Pengatur Muda TK II/ IV B',
    //     'slug' => 'pengatur-muda-tk-ii-iv-b',
    // ])
    // Pangkat::create([
    //     'nama' => 'Pengatur Muda TK III/ IV B',
    //     'slug' => 'pengatur-muda-tk-iii-iv-b',
    // ])

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pangkats');
    }
};