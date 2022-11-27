<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class FilterCollection extends Model
{
    use AsSource;

    protected $table = 'filter_collection';
    public $timestamps = 'false';
}
