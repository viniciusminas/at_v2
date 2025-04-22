<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoContato extends Model
{
    use HasFactory;

    protected $table = 'tipo_contato';
    protected $fillable = ['nome', 'descricao'];
}