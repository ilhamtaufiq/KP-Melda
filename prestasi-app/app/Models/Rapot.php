<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rapot extends Model
{
    use HasFactory;
    
    public function siswa(): BelongsTo
    {
        return $this->belongsTo(siswa::class);
    }
}
