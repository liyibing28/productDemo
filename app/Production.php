<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    protected $fillable = ['customer_number','order_time','planed_delibvery_time','specification','model','cuche','cuche_type','rechuli','jingche','kaidaoyi','kaidaoyi_renyuan','kaiding','kaiding_banci','kaiding_renyuan','zuankong','zuankong_banci','zuankong_renyuan','is_finished' ];

}
