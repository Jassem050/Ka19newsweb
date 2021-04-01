<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWritersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writers', function (Blueprint $table) {
            $table->bigIncrements('writer_id');
            $table->string('writer_name');
            $table->string('writer_location');
            $table->biginteger('writer_mobile');
            $table->text('writer_image');
            $table->string('writer_email');
            $table->string('writer_password');
            $table->string('writer_status');
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
        Schema::dropIfExists('writers');
    }
}
