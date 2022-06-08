<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PropositionP extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('proposition', function (Blueprint $table) {
        $table->integer('prix_proposé');
        $table->timestamps();

        $table->foreignId('livre_id')->constrained('livres')->onDelete('restrict')->onUpdate('restrict');

        $table->foreignId('user_id')->constrained('users')->onDelete('restrict')->onUpdate('restrict');//acheteur
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposition');
    }
}
