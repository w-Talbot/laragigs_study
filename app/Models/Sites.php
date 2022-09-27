<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sites extends Model
{
    use HasFactory;

    protected $fillable = ['sites'];

    //relationship to user
    public function study(){
        return $this->belongsTo(Study::class,'user_id');
    }

}
