<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompositionRecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('composition_recipe', function (Blueprint $table) {
        	$table->unsignedBigInteger('recipe_id');
        	$table->unsignedBigInteger('composition_id');
          $table->unsignedInteger('quantity');

          $table->foreign('recipe_id')
                ->references('id')->on('recipes')
                ->onDelete('cascade');

          $table->foreign('composition_id')
                ->references('id')->on('compositions')
                ->onDelete('cascade');

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
        Schema::dropIfExists('has_compositions');
    }
}
