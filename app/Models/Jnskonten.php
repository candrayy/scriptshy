<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jnskonten extends Model
{
    use hasFactory;
    
    protected $table ="jns_konten";
    protected $primaryKey ="id";
    protected $fillable = [
        'kd_jns_konten', 'jns_konten'
    ];

    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
}
