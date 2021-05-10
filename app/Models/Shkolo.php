<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shkolo extends Model
{
    use HasFactory;
     protected $fillable = ['title', 'link', 'color']; /*Всички модели Laravel, когато са създадени, не съдържат свойство за попълване.
За да им позволим да приемат полеви данни и да ги вмъкнат в базата данни, първо трябва да ги разрешим в нашия модел.*/
}
