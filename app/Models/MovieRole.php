<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieRole extends Model
{
    use HasFactory;

    protected $table = 'movie_roles';

    public function movie()
    {
        
    }    
}
