<?php

namespace Modules\SettingEvent\Http\ViewComposers\Settings;

use Modules\Portal\Http\ViewComposers\SuperComposer\SuperComposer;
use Modules\SettingEvent\Entities\PastEvent;


class BodyComposer extends SuperComposer 
{

    private $past_events;


    public function assign($view)
    {
        $this->pastEvents($view->event_setting->event);
    }

    private function pastEvents($event)
    {
        $this->past_events = PastEvent::where('event_id', $event->id)->get();
    }

    public function view($view)
    {
        $view->with('past_events', $this->past_events);
    }

}
