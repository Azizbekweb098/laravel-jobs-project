<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Application extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'subjects',
        'message',
        'file_up',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
