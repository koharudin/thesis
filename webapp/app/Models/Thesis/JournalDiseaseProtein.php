<?php

namespace App\Models\Thesis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class JournalDiseaseProtein extends Model
{
    use HasFactory;
    public $table = "journal_disease_protein";
    protected static function booted(): void
    {
        self::creating(function (JournalDiseaseProtein $record) {
            $record->uuid = Str::uuid()->toString();
        });
    }
    public $fillable = ["journal_id","disease_id","protein_id"];
}
