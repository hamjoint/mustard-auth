@extends(config('mustard.views.layout', 'mustard::layouts.master'))

@section('title')
    Reset password
@stop

@section('content')
    <div class="reset-password">
        <div class="row">
            <div class="large-12 columns">
                <h1>Reset password</h1>
                <p>Enter the email address you registered with below, and we'll send you a reset link in an email.</p>
                <form method="post" action="/password/email" data-abide="true">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="medium-6 medium-offset-3 large-4 large-offset-4 columns">
                            <label>Email address
                                <input type="email" name="email" placeholder="Your email address" required pattern="email" />
                            </label>
                            <small class="error">Please enter your email address.</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-6 medium-offset-3 large-4 large-offset-4 columns">
                            <button class="button expand radius">Send email</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
