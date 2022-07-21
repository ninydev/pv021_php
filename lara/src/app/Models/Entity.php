<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    use HasFactory;

    // Указать название таблицы, в случае нарушения правил наименования
    // protected $table = 'table_entities';
}
