<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    // DICHIARIAMO GLI ATTRIBUTI
    protected $fillable = [
        'title',
        'producer',
        'description',
        'cover'
    ];
    public function consoles(){
        return $this->belongsToMany(Console::class);
    }
}
