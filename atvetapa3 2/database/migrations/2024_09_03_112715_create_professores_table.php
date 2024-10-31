<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('professores', function (Blueprint $table) {
        $table->id();
        $table->string('nome', 191);
        $table->string('email', 191)->unique();
        $table->string('telefone', 20)->nullable();
        $table->date('data_contratacao');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professores');
    }
};
