<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Events extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $connection = 'mongodates';
    protected $table = 'events';

    protected $fillable = [
        'event_name', 'start_date', 'end_date'
    ];


    public $timestamps = true;
    protected $dates = [
        'start_date'.
        'end_date',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}