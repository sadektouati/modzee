<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photographer extends Model
{
    protected $table = 'photographer';
    use HasFactory;

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}
