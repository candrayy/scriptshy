<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hashtag extends Model
{
    use hasFactory;
    
    protected $table ="hashtag";
    protected $primaryKey ="id";
    protected $fillable = [
        'kd_hashtag', 'hashtag'
    ];

    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
}
