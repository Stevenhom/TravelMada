<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user'); // Colonne pour la clé étrangère
            $table->foreign('id_user')->references('id')->on('users');
            $table->unsignedBigInteger('id_produit'); // Colonne pour la clé étrangère
            $table->foreign('id_produit')->references('id')->on('produits');
            $table->float('quantite');
            $table->timestamp('date_debut');
            $table->timestamp('date_fin');
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
        Schema::dropIfExists('location');
    }
}
