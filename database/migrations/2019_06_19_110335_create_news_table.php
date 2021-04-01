<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('news_id');
            $table->integer('category_id');
            $table->string('admin_id');
            $table->integer('language_id');
            $table->string('news_title');
            $table->text('news_content');
            $table->text('news_image');
            $table->string('news_image_caption');
            $table->string('news_place');
            $table->date('news_date');
            $table->time('news_time');
            $table->integer('news_views');
            $table->string('news_status');
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
        Schema::dropIfExists('news');
    }
}
