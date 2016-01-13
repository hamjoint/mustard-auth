@extends(config('mustard.views.layout', 'mustard::layouts.master'))

@section('title')
    Unverified email address
@stop

@section('content')
    <div class="unverified-email">
        <div class="row">
            <div class="large-12 columns">
                <h1>Please verify your email address</h1>
                <p>We have sent a message to your account's email address ({{ Auth::user()->email }}) containing a unique link. Clicking the link inside the email should return you here, verifying that the email address you entered is working. We need to do this to ensure that if you make any transactions you can be notified of essential information.</p>
                <p>If the email hasn't arrived, make sure your email address is correct, then click the button below to resend the email.</p>
                <form method="post" action="/email/resend" data-abide="true">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="medium-6 medium-offset-3 large-4 large-offset-4 columns">
                            <label>Your email address
                                <input type="email" name="email" value="{{ Auth::user()->email }}" placeholder="Your email address" pattern="email" required />
                            </label>
                            <small class="error">Please enter a valid email address.</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-6 medium-offset-3 large-4 large-offset-4 columns">
                            <button class="button expand radius"><i class="fa fa-refresh"></i> Resend verification email</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
