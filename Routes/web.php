<?php


Route::prefix('settingevent')->group(function() {
	Route::put('{setting_event}', 'SettingEventController@update')->name('settingevent.update');


	Route::post('{event}', 'PastEventController@store')->name('settingevent.pastevent.store');

	Route::delete('{past_event}', 'PastEventController@destroy')->name('settingevent.pastevent.destroy');
});

