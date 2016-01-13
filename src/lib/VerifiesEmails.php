<?php

namespace Hamjoint\Mustard\Auth;

use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Auth;
use LaravelVerifyEmails\Support\Facades\VerifyEmail;

trait VerifiesEmails
{
    /**
     * Display a message about the user's unverified email address.
     *
     * @return \Illuminate\Http\Response
     */
    public function showUnverifiedForm()
    {
        return view('mustard::auth.unverified-email');
    }

    /**
     * Send another verification email.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function resend(Request $request)
    {
        $user = Auth::user();

        if ($user->getVerified()) {
            return redirect()->back();
        }

        $response = VerifyEmail::sendVerificationLink($user, function (Message $message) use ($user) {
            $message->subject($user->getVerifyEmailSubject());
        });

        switch ($response) {
            case VerifyEmail::VERIFY_LINK_SENT:
                return redirect()->back()->with(
                    'status',
                    trans('mustard-auth::verify_emails.sent')
                );
        }
    }

    /**
     * Attempt to verify a user.
     *
     * @param string $token
     *
     * @return \Illuminate\Http\Response
     */
    public function verify($token)
    {
        $response = VerifyEmail::verify(Auth::user(), $token);

        switch ($response) {
            case VerifyEmail::EMAIL_VERIFIED:
                return redirect($this->redirectPath())->with(
                    'status',
                    trans('mustard-auth::verify_emails.verified')
                );

            default:
                return redirect()->back()->withErrors([
                    'email' => trans('mustard-auth::verify_emails.token'),
                ]);
        }
    }

    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
    }
}
