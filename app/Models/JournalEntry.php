<?php

namespace App\Models;

use App\Enums\Location;
use Database\Factories\JournalEntryFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['internship_id', 'worked_on', 'hours', 'location', 'tasks'])]
class JournalEntry extends Model
{
    /** @use HasFactory<JournalEntryFactory> */
    use HasFactory;

    protected function casts(): array
    {
        return [
            'worked_on' => 'date',
            'hours' => 'decimal:2',
            'location' => Location::class,
        ];
    }

    public function internship(): BelongsTo
    {
        return $this->belongsTo(Internship::class);
    }
}
