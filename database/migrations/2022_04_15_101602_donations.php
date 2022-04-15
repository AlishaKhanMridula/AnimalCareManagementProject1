<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

public function up()
{
    Schema::create('donation', function (Blueprint $table) {
        $table->string('name')->primary();
        $table->string('email')->nullable()->index();
        $table->string('address', 45)->nullable();
        $table->text('number')->nullable();
        $table->text('nid');
        $table->text('donation reason');
        $table->integer('donation amount')
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('donation');
}
}
