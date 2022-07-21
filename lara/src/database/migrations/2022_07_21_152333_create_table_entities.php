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
        // https://laravel.su/docs/8.x/migrations#available-column-types
        // Настраиваем таблицу для нашей сущности
        Schema::create('entities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('url', 100);
            // Нельзя после миграции добавлять поля в базу
            // Или откатить (и потерять все данные)
            // Или создать новую миграцию
            // $table->string('do_feni', 100);
            $table->longText('description');
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
        Schema::dropIfExists('entities');
    }
};
