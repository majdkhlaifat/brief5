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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('image6')->nullable();
            $table->string('house_name')->nullable();
            $table->string('price')->nullable();
            $table->string('service')->nullable();
            $table->string('extra_service')->nullable();
            $table->string('description')->nullable();
            $table->string('number_bed')->nullable();
            $table->string('number_room')->nullable();
            $table->string('number_bathroom')->nullable();
            $table->string('number_person')->nullable();
            $table->string('location')->nullable();
            $table->string('about')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('type_id')->nullable();
            $table->foreign('type_id')
            ->references('id')
            ->on('typeofhouses')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->unsignedBigInteger('lesson_id')->nullable();
            $table->foreign('lesson_id')
            ->references('id')
            ->on('lessons')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
            
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
        Schema::dropIfExists('houses');
    }
};
