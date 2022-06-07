<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LivreCommander extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livre_commander', function (Blueprint $table) {
            $table->integer ('quantity_order');
            $table->integer('prix_vente');
            $table->timestamps();

          //  $table->foreignId('article_id')->constrained('articles')->onDelete('restrict')->onUpdate('restrict');

          //  $table->foreignId('order_id')->constrained('orders')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livre_commander');
    }
}
