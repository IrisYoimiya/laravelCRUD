<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Papper extends Model
{
    //
    use HasFactory;
    protected $fillable = ['writter_id', 'title', 'abstract'];

    public function writter(){
        return $this->belongsTo(Writter::class);
    }
}
