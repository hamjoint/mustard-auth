<?php

/*

This file is part of Mustard.

Mustard is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Mustard is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Mustard.  If not, see <http://www.gnu.org/licenses/>.

*/

Route::group([
    'middleware' => 'web',
    'prefix' => env('MUSTARD_BASE', ''),
    'namespace' => 'Hamjoint\Mustard\Auth\Http\Controllers'
], function () {
    Route::get('login', 'AuthController@showLoginForm');
    Route::post('login', 'AuthController@login');
    Route::get('logout', 'AuthController@logout');

    Route::get('register', 'AuthController@showRegistrationForm');
    Route::post('register', 'AuthController@register');

    Route::group(['middleware' => 'guest'], function () {
        Route::get('password/reset/{token?}', 'PasswordController@showResetForm');
        Route::post('password/email', 'PasswordController@sendResetLinkEmail');
        Route::post('password/reset', 'PasswordController@reset');
    });

    Route::get('email/unverified', 'EmailController@getUnverified');
    Route::post('email/resend', 'EmailController@postResend');
    Route::get('email/verify/{token}', 'EmailController@getVerify');
});
