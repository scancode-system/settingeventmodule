<?php

namespace Modules\SettingEvent\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Portal\Entities\EventSetting;

class SettingEvent extends Model
{
    protected $fillable = ['id', 'title', 'start', 'end', 'goal', 'goal_saller'];


      public function event_setting()
    {
        return $this->morphOne(EventSetting::class, 'configurable');
    }
}
