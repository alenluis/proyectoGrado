<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    public $table='cursos';

    public $fillable = [
        'cur_titulo',
        'cur_descripcion',
        'cur_grupo',
        'cur_estado'
    ];

    protected $casts =[
        'cur_titulo'=>'string',
        'cur_descripcion'=>'string',
        'cur_grupo'=>'string',
        'cur_estado'=>'string'
    ];
    protected static array $rules =[
        'cur_titulo'=>'required|string',
        'cur_descripcion'=>'required|string',
        'cur_grupo'=>'required|string',
    ];
}
