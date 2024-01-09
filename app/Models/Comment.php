<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function rapper()
    {
        return $this->belongsTo(Rapper::class);
    }

    public function beat()
    {
        return $this->belongsTo(Beat::class);
    }
}
