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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Nome azienda', 40);
            $table->string('Stazione di partenza', 50);
            $table->string('Stazione di arrivo', 50);
            $table->date('Orario di partenza');
            $table->date('Orario di arrivo');
            $table->smallInteger('Codice Treno')->unsigned();
            $table->tinyInteger('Numero di carozze');
            $table->boolean('In orario')->default(1);
            $table->boolean('Cancellato')->default(0);
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
        Schema::dropIfExists('trains');
    }
};
