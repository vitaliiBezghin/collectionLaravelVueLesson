<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalData extends Model
{
    use HasFactory;

    protected $table = "personal_data";

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
