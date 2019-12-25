<?php
if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}
/*
 * Email Templates Management
 */
Route::group(['namespace' => 'EmailTemplates'], function () {
    Route::resource('emailtemplates', 'EmailTemplatesController', ['except' => ['show', 'create', 'save']]);

    //For DataTables
    Route::post('emailtemplates/get', 'EmailTemplatesTableController')
        ->name('emailtemplates.get');
});
