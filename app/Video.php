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
        return $this->belongsTo('App\User');
    }

    public function categories() {
        return $this->belongsToMany('App\Category');
    }

    /*
     * Lista ID kategorii dla filmu
     */
    public function getCategoryListAttribute() {
        return $this->categories->pluck('id')->all();
    }
}
