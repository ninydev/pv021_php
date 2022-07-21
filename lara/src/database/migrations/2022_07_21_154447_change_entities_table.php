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
        Schema::table('entities', function (Blueprint $table) {
            // Все изменения в структуре базы данных должны строиться через миграцию
            $table->string('do_feni', 100)->default('Do Feni');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // В откате нужно поставить таблицу в первоначальное состояние
        Schema::table('entities', function (Blueprint $table) {
            $table->dropColumn('do_feni');
        });
        //
    }
};
