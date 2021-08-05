<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;


class PaymentMethodCreditcard extends BaseModel
{
    use SoftDeletes;
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
