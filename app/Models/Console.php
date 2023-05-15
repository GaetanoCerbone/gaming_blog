<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Console extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'producer',
        'logo',
        'description',
        'user_id'
    ];
    // un 'oggetto di classe console puo essere creato da user
    public function user(): BelongsTo{
        // l'oggetto di classe console fa parte di user
        return $this->belongsTo(User::class);
    }
}
