<?php

namespace Modules\SettingEvent\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Modules\SettingEvent\Http\ViewComposers\Settings\BodyComposer;


class ViewComposerServiceProvider extends ServiceProvider {

    public function boot() {
        View::composer('settingevent::settings.body', BodyComposer::class);
    }

    public function register() {
        //
    }

}
