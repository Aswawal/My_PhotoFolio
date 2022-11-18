<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'email',
        'category_id',
        'title',
        'body',
    ];

    protected $guarded = ['id'];

    public function Post(){
        return $this->belongsTo(post::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
