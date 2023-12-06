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
        Schema::create('my_test_answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('my_test_id');
            $table->unsignedBigInteger('user_id');
            $table->string('status');
            $table->timestamps();
    
            $table->foreign('my_test_id')->references('id')->on('my_tests')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('my_test_answers');
    }
};
