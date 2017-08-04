<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('brand_id')->unsigned()->nullable();
            $table->integer('status_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('brand_id')
                ->references('id')->on('brands')
                ->onUpdate('cascade')
                ->onDelete('SET NULL');

            $table->foreign('status_id')
                ->references('id')->on('statuses')
                ->onUpdate('cascade')
                ->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
