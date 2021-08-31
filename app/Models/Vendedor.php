<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendedor extends Model
{
    use SoftDeletes;
    
    protected $table = 'vendedores';

    protected $fillable = ['id', 'user_id', 'created_at', 'updated_at', 'deleted_at'];

}
