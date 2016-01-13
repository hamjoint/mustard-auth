@extends(config('mustard.views.layout', 'mustard::layouts.master'))

@section('title')
    Reset password
@stop

@section('content')
    <div class="reset-password">
        <div class="row">
            <div class="large-12 columns">
                <h1>Reset password</h1>
                <p>Enter your new password below.</p>
                <form method="post" action="/password/reset" data-abide="true">
                    {!! csrf_field() !!}
                    <input type="hidden" name="token" value="{{ $token }}" />
                    <div class="row">
                        <div class="medium-6 medium-offset-3 large-4 large-offset-4 columns">
                            <label>Email
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="Your account email address" required />
                            </label>
                            <small class="error">We need your email address to make sure you're you.</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-6 medium-offset-3 large-4 large-offset-4 columns">
                            <label>Password
                                <input type="password" id="password" name="password" placeholder="Choose something long" required />
                            </label>
                            <small class="error">We need a password to protect your account.</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-6 medium-offset-3 large-4 large-offset-4 columns">
                            <label>Repeat password
                                <input type="password" name="password_confirmation" placeholder="Just in case you typo'd" required data-equalto="password" />
                            </label>
                            <small class="error">Your password doesn't seem to match.</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-6 medium-offset-3 large-4 large-offset-4 columns">
                            <button class="button expand radius">Save password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
