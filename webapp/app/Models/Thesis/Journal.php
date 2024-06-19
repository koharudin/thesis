<?php

namespace App\Models\Thesis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Journal extends Model
{
    use HasFactory;
    public $table = "journal";
    protected static function booted(): void
    {
        self::creating(function (Journal $record) {
            $record->uuid = Str::uuid()->toString();
        });
    }
    
    public function listProtein(){
        return $this->hasMany(JournalDiseaseProtein::class,'journal_id','id');
    }
}
