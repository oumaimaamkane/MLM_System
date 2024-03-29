<?php

use Illuminate\Support\Facades\Route;
// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('pack', 'PackCrudController');
    Route::crud('user', 'UserCrudController');
    Route::get('user/participant-users', 'UserCrudController@index2');
    Route::get('user/export', 'UserCrudController@export');

    // Route::get('user/non-activated', 'UserCrudController@nonActivated');
    Route::get('network', 'NetworkController@index');
    Route::crud('level', 'LevelCrudController');
    Route::crud('network', 'NetworkCrudController');
    Route::get('network/{nr}', 'NetworkCrudController@pack');
    Route::get('network/{nr}/{id}' , 'NetworkCrudController@packTreeShow');
    Route::crud('wallet', 'UpgradeUserCrudController');
    Route::crud('upgrade', 'UpgradeCrudController');
    Route::get('upgrade/{pack}', 'UpgradeCrudController@upgradeListPerPack');
    Route::get('upgrade-participants' , 'UpgradeCrudController@participantsList');
    Route::get('/upgrade-participants/{upgrade_id}/{id}/paye' , 'UpgradeCrudController@paye');
    Route::crud('inactivate-user', 'InactivateUserCrudController');
    Route::get('inactivate-user/{id}/activate', 'InactivateUserCrudController@activate');
    Route::crud('user-network', 'UserNetworkCrudController');
    Route::post('user-network/{id}', 'UserNetworkCrudController@store')->name('save.user');
}); // this should be the absolute last line of this file