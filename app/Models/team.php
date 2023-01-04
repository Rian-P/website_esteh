<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\carbon;

class team extends Model
{
    use HasFactory;

    protected $table = 'team';
    protected $fillable = [
        'image',
        'name',
        'title',
        'facebook',
        'twitter',
        'linkedin',
        'jabatan',
        'pendidikan',
        'image1',
        'image2',
        'image3',
        'keterangan1',
        'keterangan2',
        'keterangan3',
    ];

    public function getFromDateAttribute() {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('1, d  F Y');
    }
}
