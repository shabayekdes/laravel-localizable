<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisdomTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisdom_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale', 5)->index();
            $table->string('content');
            $table->timestamps();

            $table->foreignId('wisdom_id')
                ->references('id')->on('wisdoms')
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
        Schema::dropIfExists('wisdom_translations');
    }
}
