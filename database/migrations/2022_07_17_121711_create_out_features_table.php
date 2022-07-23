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
        Schema::create('out_features', function (Blueprint $table) {
            $table->id();
            $table->longText('name');

            $table->string('icon_1');
            $table->string('title_1');
            $table->string('notes_1');

            $table->string('icon_2');
            $table->string('title_2');
            $table->string('notes_2');

            $table->string('icon_3');
            $table->string('title_3');
            $table->string('notes_3');
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
        Schema::dropIfExists('out_features');
    }
};
