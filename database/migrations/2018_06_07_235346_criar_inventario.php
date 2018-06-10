<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarInventario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('inventario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tag');
            $table->unsignedInteger('grupo');
            $table->unsignedInteger('classe');
            $table->string('descricao');
            $table->string('fabricante');
            $table->string('marca');
            $table->string('modelo');
            $table->string('serie');
            $table->string('lote');
            $table->string('registro_anvisa');
            $table->string('validade_registo');
            $table->unsignedInteger('site');
            $table->unsignedInteger('localizacao');
            $table->unsignedInteger('departamento');
            $table->unsignedInteger('sala');
            $table->unsignedInteger('proprietario');
            $table->string('ativacao');
            $table->integer('usuario_id')->unsigned();
            $table->date('data_compra');
            $table->date('data_fabricacao');
            $table->float('valor_compra', 12,2);
            $table->unsignedInteger('conjunto_id');
            $table->string('observacoes');
            $table->string('potencia');
            $table->string('tensao');
            $table->string('versao_software');
            $table->string('classificacao_risco');
            $table->string('operacionalidade');
            $table->string('patrimonio');
            $table->boolean('backup');
            $table->unsignedInteger('modalidade_propriedade');
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
        //
    }
}
