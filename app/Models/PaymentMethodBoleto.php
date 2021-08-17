<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;


class PaymentMethodBoleto extends BaseModel
{
    use SoftDeletes;

    protected $table = 'payment_method_boleto';
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
