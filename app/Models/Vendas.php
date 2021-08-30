<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendas extends Model
{
    use SoftDeletes;

    protected $table = 'vendas';

    protected $fillable = ['id','user_id', 'plans_id', 'vendedor_id', 'created_at', 'updated_at', 'deleted_at'];

}
