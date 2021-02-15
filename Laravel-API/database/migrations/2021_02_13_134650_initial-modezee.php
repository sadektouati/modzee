<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InitialModezee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // could add some constraints here but then I have no Idea of the requirements
        Schema::create('photographer', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('phone', 20)->nullable(true)->unique();
            $table->string('email', 50)->nullable(false)->unique();
            $table->string('bio');
            $table->string('profile_picture');
            $table->timestamps();
        });

        Schema::create('gallery', function (Blueprint $table) {
            $table->id();
            $table->foreignId('photographer_id')->constrained('photographer');
            $table->string('title', 50)->nullable(false);
            $table->string('description');
            $table->string('img', 100);
            $table->boolean('featured')->default(false)->nullable(false);
            $table->date('created_on');
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
        Schema::dropIfExists('photographer');
        Schema::dropIfExists('gallery');
    }
}
