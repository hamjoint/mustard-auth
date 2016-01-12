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

namespace Hamjoint\Mustard\Auth\Http\Controllers;

use Hamjoint\Mustard\Http\Controllers\Controller;
use LaravelVerifyEmails\Foundation\Auth\VerifiesEmails;

class EmailController extends Controller
{
    use VerifiesEmails;

    /**
     * Path to redirect to after verification.
     *
     * @var $redirectTo
     */
    public $redirectTo = '/';

    /**
     * Display a message about the user's unverified email address.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUnverified()
    {
        return view('mustard::auth.unverified-email');
    }
}
