<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha')->nullable();
            $table->string('concepto')->nullable();
            $table->string('socio')->nullable();
            $table->string('plan')->nullable();
            $table->date('inicio')->nullable();
            $table->date('vencimiento')->nullable();
            $table->decimal('moneda')->nullable();
            $table->string('forma')->nullable();
            $table->string('banco')->nullable();
            $table->string('tipo_cuenta')->nullable();
            $table->integer('numero_cuenta')->nullable();
            $table->string('tarjeta')->nullable();
            $table->string('numero_tarjeta')->nullable();
            $table->string('recibidor')->nullable();
            $table->boolean('check_dscto')->default(1);
            $table->integer('tarifa_dscto')->nullable();
            $table->boolean('autoriza_dscto')->default(1);
            $table->integer('monto_dscto')->nullable();
            $table->integer('monto_plan')->nullable();
            $table->integer('monto_soles')->nullable();
            $table->integer('monto_dolares')->nullable();
            $table->integer('monto_tarjeta')->nullable();
            $table->string('tipo_documento')->nullable();
            $table->integer('serie_documento')->nullable();
            $table->integer('numero_documento')->nullable();
            $table->string('estado')->nullable();
            $table->boolean('check_empresa')->default(1);
            $table->string('empresa')->nullable();
            $table->string('contrato')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('hora')->nullable();
            $table->string('vendedor')->nullable();
            $table->string('anula')->nullable();
            $table->date('fecha_anula')->nullable();
            
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
        Schema::dropIfExists('pagos');
    }
};
