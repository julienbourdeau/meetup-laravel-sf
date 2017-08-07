<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Home extends Model
{
    use Searchable;

    protected $casts = [
        'user' => 'array',
        'urls' => 'array',
    ];

    public function toSearchableArray()
    {
        $home = $this->toArray();

        $home['_geoloc'] = [
            'lat' => $this->lat,
            'lng' => $this->lng,
        ];

        return $home;
    }
}
