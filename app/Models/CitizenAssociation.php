<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CitizenAssociation extends Model
{
    use HasFactory;

    public function village(): BelongsTo
    {
        return $this->belongsTo(Village::class);
    }

    public function neighborhoodAssociations(): hasmany
    {
        return $this->hasMany(NeighborhoodAssociation::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updater(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
