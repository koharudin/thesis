<?php

namespace App\Models\Thesis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Protein extends Model
{
    use HasFactory;
    public $table = "protein";
    protected static function booted(): void
    {
        self::creating(function (Journal $record) {
            $record->uuid = Str::uuid()->toString();
        });
    }
}
