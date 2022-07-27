<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;


class Portfolio extends Model
{
    use Resizable; // Для изменения размера изображений
}
