<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ComprasCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('compras', function(Blueprint $table){
            $table->foreignId('id_clientes')->constrained('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('compras', function(Blueprint $table){
            $table->dropForeign(['id_clientes']);
            $table->dropColumn('id_clientes');
        });
    }
}
