<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use hasFactory;

    protected $table ="platform";
    protected $primaryKey ="id";
    protected $fillable = [
        'kd_platform', 'platform'
    ];

    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
}
