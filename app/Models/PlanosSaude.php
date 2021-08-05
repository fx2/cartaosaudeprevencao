<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlanosSaude extends BaseModel
{
    use SoftDeletes;
    
    protected $primaryKey = 'id';
    protected $table = 'planos_saudes';

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
