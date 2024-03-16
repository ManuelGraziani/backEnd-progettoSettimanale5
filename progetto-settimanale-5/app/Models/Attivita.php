<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attivita extends Model
{
    use HasFactory;

    public function attivita(): BelongsTo{
        return $this->belongsTo(Progetto::class);
    }
}
