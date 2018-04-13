<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'title', 'url', 'description',
        // 'user_id'
    ];

    /*
     * Film ma swojego autora
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}
