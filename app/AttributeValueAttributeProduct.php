<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AttributeValueAttributeProduct extends Pivot //Pivot for attributeValue and attributeProduct models
{
    protected $table = ['attribute_value_attribute_product'];

}
