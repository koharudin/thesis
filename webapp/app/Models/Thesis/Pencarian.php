<?php

namespace App\Models\Thesis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pencarian extends Model
{
    use HasFactory;
    public $table = "pencarian";

    public function list_journals(){
        return $this->hasMany(Journal::class,"id","journal_id")
    }
}
