<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MataPelajaran extends Model
{
    use HasFactory;
    
    public function rapot(): BelongsTo
    {
        return $this->belongsTo(rapot::class);
    }
}