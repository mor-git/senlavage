<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details_services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('produit_id')->unsigned();
            $table->foreign('produit_id')
                ->references('id')
                ->on('produits')
                ->onUpdate('cascade');
            $table->integer('service_id')->unsigned();
            $table->foreign('service_id')
                ->references('id')
                ->on('services')
                ->onUpdate('cascade');
            $table->string('taille');
            $table->double('montant');
            $table->double('total');
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
        Schema::dropIfExists('details_services');
    }
}
