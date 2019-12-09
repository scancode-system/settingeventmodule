<?php

namespace Modules\SettingEvent\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Modules\SettingEvent\Http\Requests\PastEventRequest;
use Modules\Portal\Entities\Event;
use Modules\SettingEvent\Entities\PastEvent;


class PastEventController extends Controller
{

    public function store(PastEventRequest $request, Event $event)
    {
        PastEvent::create($request->all()+['event_id' => $event->id]);
        return back()->with('success', 'Total do evento anterior cadastrado.');
    }

    public function destroy(Request $request, PastEvent $past_event)
    {
        $past_event->delete();
        return back()->with('success', 'Total do evento '.$past_event->title.' excluído.');
    }

}
