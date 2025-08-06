<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesins', function (Blueprint $table) {
            
            $table->id();
            $table->string('nama_mesin');
            $table->foreignId('kategori_id')->default(1);
            $table->text('spesifikasi')->nullable();
            $table->string('kode_mesin', 6)->nullable();
            $table->date('tanggal_pembelian')->nullable();
            $table->foreignId('user_id')->default(1);
            $table->String('mesin_image')->nullable();
            $table->String('nameTag_image')->nullable();
            $table->timestamps();
            $table->softDeletes();

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mesins');
    }

   
}
