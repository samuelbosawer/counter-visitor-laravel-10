<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Coderflex\Laravisit\Concerns\CanVisit;
use Coderflex\Laravisit\Concerns\HasVisits;

class Post extends Model Implements CanVisit
{
    use HasFactory;
    use HasVisits;
    protected $table = 'posts';

    // protected $table[]

}
