<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Schedule extends Model
{
    use HasFactory;

    protected $table ="schedule";
    protected $primaryKey ="id";
    protected $fillable = [
        'jns_konten_id', 'platform_id', 'hashtag_id', 'judul_konten',
        'caption', 'created_at', 'updated_at'
    ];

    public function jns_konten()
    {
        return $this->belongsTo(Jnskonten::class);
    }

    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }

    public function hashtag()
    {
        return $this->belongsTo(Hashtag::class);
    }
}
