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
        Schema::create('kode_akuns', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->string('nama_akun')->unique();
            $table->enum('jenis_akun', [
                'aktiva',
                'utang',
                'penghasilan',
                'modal',
                'beban'
            ]);
            $table->integer('parent_id')->default(0);
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
        Schema::dropIfExists('kode_akuns');
    }
};
