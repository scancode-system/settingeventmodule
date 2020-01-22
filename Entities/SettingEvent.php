<?php

namespace Modules\SettingEvent\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Portal\Entities\EventSetting;

class SettingEvent extends Model
{
	protected $fillable = ['id', 'title', 'start', 'end', 'goal', 'goal_saller'];

	protected $dates = [
		'start',
		'end'
	];

	protected $appends = ['start_end_date'];

	public function event_setting()
	{
		return $this->morphOne(EventSetting::class, 'configurable');
	}

	

	

	public function getStartEndDateAttribute()
	{
		if(is_null($this->start) || is_null($this->end)){
			return null;
		} else {
			return $this->start->format('d/m/Y').' - '.$this->end->format('d/m/Y');
		}
	}


}
