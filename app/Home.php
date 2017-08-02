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
}
