@extends(config('mustard.views.layout', 'mustard::layouts.master'))

@section('title')
    Register
@stop

@section('content')
    <div class="row">
        <div class="large-12 columns">
            <h1>Register</h1>
            <form method="post" action="/register" data-abide="true">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="medium-8 medium-offset-2 large-6 large-offset-3 columns">
                        <label>Choose a username (lowercase characters and numbers only)
                            <input type="text" name="username" placeholder="Try something memorable" pattern="^[a-zA-Z0-9\-_]+$" />
                        </label>
                        <small class="error">Allowed characters are letters, numbers, hyphens and underscores.</small>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-8 medium-offset-2 large-6 large-offset-3 columns">
                        <label>Email address
                            <input type="email" name="email" placeholder="Your email address (we never share this with anyone)" required pattern="email" />
                        </label>
                        <small class="error">We need an email so we can contact you about your purchases.</small>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-4 medium-offset-2 large-3 large-offset-3 columns">
                        <label>Password
                            <input type="password" id="password" name="password" placeholder="Choose something long" required />
                        </label>
                        <small class="error">We need a password to protect your account.</small>
                    </div>
                    <div class="medium-4 large-3 columns end">
                        <label>Repeat password
                            <input type="password" name="password_confirmation" placeholder="Just in case you typo'd" required data-equalto="password" />
                        </label>
                        <small class="error">Your password doesn't seem to match.</small>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-6 medium-offset-3 large-4 large-offset-4 columns">
                        <button class="button expand radius"><i class="fa fa-check"></i> Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
