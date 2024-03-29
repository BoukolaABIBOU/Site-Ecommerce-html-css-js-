<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Commandes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id ();
            $table->date('date_commande');
            $table->string('etat_commande');
            $table->string('description_commande');
            $table->string('ref_facture');
            $table->date('date_facture');
            $table->integer('montant_payement');
            $table->string('etat_payement');
            $table->string('ref_livraison');
            $table->date('date_livraison');
            $table->string('nomdulieu_livraison');
            $table->string('adresse_livraison');
            $table->timestamps();

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
        Schema::dropIfExists('commandes');
    }
}
