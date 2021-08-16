<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;


class PaymentMethodBoleto extends BaseModel
{
    use SoftDeletes;
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
