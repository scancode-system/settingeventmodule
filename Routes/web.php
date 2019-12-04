<?php


Route::prefix('settingevent')->group(function() {
	Route::put('{setting_event}', 'SettingEventController@update')->name('settingevent.update');
});

