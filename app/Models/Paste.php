<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paste extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'short_url', 'pasted_data',
    ];

    public static function generateShortUrl()
    {
        while (!$url) {
            $url = str_random(16);
            $exists = Paste::where('short_url', $url)->first();
            if (!$exists) {
                break;
            }
            $url = null;
        }
        return $url;
    }
}
