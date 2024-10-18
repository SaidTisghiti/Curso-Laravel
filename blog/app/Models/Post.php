<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    /* 
    Si no usamos esto: (protected $table = 'posts';), para que nos lo pille hay que poner la clase en singular y mayuscula la primera letra y en 
    la tabla que sea minuscula y plural, a parte las palablas han de ser en ingles, ya que si lo haces en español es mas probable que no salga.
    
    Ejemplo

    ingles = Category => categories

    español = Lapiz != lapices, Lapiz => lapizs

    Es mejor o ponerlo en ingles o directamente usar el (protected $table = 'posts';).
    */

    use HasFactory;

    protected $table = 'posts'; 
}
