<?php

namespace App\Models;

use App\Enums\AgreementStatus;
use Database\Factories\InternshipFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    'user_id', 'company_name', 'company_number',
    'mentor_name', 'mentor_email', 'mentor_phone',
    'starts_on', 'ends_on', 'already_employed',
    'agreement_status', 'agreement_signed_at', 'agreement_file',
])]
class Internship extends Model
{
    /** @use HasFactory<InternshipFactory> */
    use HasFactory;

    protected function casts(): array
    {
        return [
            'starts_on' => 'date',
            'ends_on' => 'date',
            'already_employed' => 'boolean',
            'agreement_status' => AgreementStatus::class,
            'agreement_signed_at' => 'date',
        ];
    }

    /** Le stagiaire (rôle « intern » dans le diagramme). */
    public function intern(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /** Les journées encodées (rôle « entries »). */
    public function entries(): HasMany
    {
        return $this->hasMany(JournalEntry::class);
    }
}