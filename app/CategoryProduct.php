<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CategoryProduct extends Pivot //Pivot that connects Category and Product models
{
    protected $table = 'category_product';
}
