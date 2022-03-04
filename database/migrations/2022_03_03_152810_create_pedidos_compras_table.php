<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos_compras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_id_produtos');
            $table->unsignedBigInteger('fk_id_clientes');
            $table->unsignedBigInteger('fk_id_status');
            $table->integer('NumeroPedido')->unique();
            $table->timestamp('DtPedido')->useCurrent();
            $table->integer('Quantidade');
            $table->timestamps();

            $table->foreign('fk_id_status')->references('id')->on('status_pedidos');
            $table->foreign('fk_id_produtos')->references('id')->on('produtos')->onDelete('cascade');
            $table->foreign('fk_id_clientes')->references('id')->on('clientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos_compras');
    }
}
