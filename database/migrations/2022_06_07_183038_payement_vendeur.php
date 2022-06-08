<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PayementVendeur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payement_vendeur', function (Blueprint $table) {
            $table->id('');
            $table->integer('prixreçu_vendeur');
            $table->date('date_envoi');
            $table->string('heure_envoi');
            $table->string('compte_envoi');
            $table->timestamps();

            $table->foreignId('commande_id')->constrained('commandes')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payement_vendeur');
    }
}
