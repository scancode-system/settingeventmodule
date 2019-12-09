<?php

namespace Modules\SettingEvent\Entities;

use Illuminate\Database\Eloquent\Model;

class PastEvent extends Model
{
    protected $fillable = ['event_id', 'title', 'total'];
}
