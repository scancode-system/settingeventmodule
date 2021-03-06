<?php

namespace Modules\SettingEvent\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\SettingEvent\Entities\SettingEvent;
use Modules\SettingEvent\Http\Requests\SettingEventRequest;


class SettingEventController extends Controller
{


    public function update(SettingEventRequest $request, SettingEvent $setting_event)
    {
        $setting_event->update($request->all());
        return back()->with('success', 'Configuração de evento alterado.');
    } 


}
