<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Progetto extends Model
{
    use HasFactory;

    public function attivitas(): HasMany{
        return $this->hasMany(Attivita::class);
    }
}
