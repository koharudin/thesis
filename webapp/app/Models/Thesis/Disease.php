<?php

namespace App\Models\Thesis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Disease extends Model
{
    use HasFactory;
    public $table = "disease";
    protected static function booted(): void
    {
        self::creating(function (Disease $record) {
            $record->uuid = Str::uuid()->toString();
        });
    }
}
