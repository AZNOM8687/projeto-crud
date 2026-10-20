<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;

    // Define quais colunas podem ser salvas no banco de dados
    protected $fillable = ['marca', 'modelo', 'ano', 'cor', 'placa'];
}