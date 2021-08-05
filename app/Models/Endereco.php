<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Endereco extends BaseModel
{
    use SoftDeletes;
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
