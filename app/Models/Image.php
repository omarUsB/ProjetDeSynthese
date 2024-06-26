<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'path',
        'id_offer'
    ];
    
    public function offre()
    {
        return $this->belongsTo(Offre::class, 'id_offer');
    }
}


