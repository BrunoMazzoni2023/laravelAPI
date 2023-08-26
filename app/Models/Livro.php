<?php

namespace App\Models;

use App\Models\Testamento;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'posicao', 'abreviacao', 'testamento_id'];

    
    public function testamento()
    {
        return $this->belongsTo(Testamento::class);
    }


}
