<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->string('correo')->nullable(false);
            $table->string('paqueteria')->nullable(false);
            $table->string('aplicaciones')->nullable(false);
            $table->string('comunicarse')->nullable(false);
            $table->string('pagina')->nullable(false);
            $table->string('canal_YT')->nullable(false);
            $table->string('blog')->nullable(false);
            $table->string('computadora')->nullable(false);
            $table->string('dispositivo')->nullable(false);
            $table->string('marketing')->nullable(false);
            $table->string('herramienta')->nullable(false);
            $table->string('informacion')->nullable(false);
            $table->string('email_cliente')->nullable(false);
            $table->string('telefono_cliente')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formularios');
    }
};
