<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchiveNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archive_news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uri')->unique();
            $table->timestamp('upload')->index();
            $table->integer('views');
            $table->string('name');
            $table->text('words');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archive_news');
    }
}
