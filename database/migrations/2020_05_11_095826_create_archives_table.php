<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archives', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('category_id');
            $table->string('user_id');
            $table->string('name');
            $table->string('slug');
            $table->string('tipe_file');
            $table->string('keterangan');
            $table->softDeletes();
            $table->timestamps();
            
            $table->foreign('project_id')
            ->references('id')
            ->on('projects')
            ->onDelete('cascade');
            
            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archives');
    }
}
