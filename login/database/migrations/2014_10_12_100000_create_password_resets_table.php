<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
          $table->string('name',60);
          $table->string('segnom');
          $table->string('priap');
          $table->string('segap');
          $table->string('esta');
          $table->string('ciu');
          $table->float('ext');
          $table->string('inte');
          $table->string('pgw');
          $table->string('tel');
          $table->string('CURP');
          $table->string('Refe');
          $table->string('RFC');
          $table->string('ss');
          $table->string('cod');
          $table->string('password');
          $table->string('password-confirm');
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
}
