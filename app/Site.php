<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = [
        'url', 'admin', 'admin_email', 'admin_alternate_email', 'admin_authority', 'visitor_number', 'price',
    ];
}
