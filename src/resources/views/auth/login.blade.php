@extends(config('mustard.views.layout', 'mustard::layouts.master'))

@section('title')
    Log in
@stop

@section('content')
    <div class="login">
        <div class="row">
            <div class="large-12 columns">
                <h1>Log in</h1>
                @if (!app()->environment('production'))
                    <p>Mustard is in demo mode. Try logging in as "{{ Hamjoint\Mustard\User::first()->email }}" using the password "password".</p>
                @endif
                <form method="post" action="/auth/login" data-abide="true">
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
                            <label>Password
                                <input type="password" name="password" placeholder="Your password" required />
                            </label>
                            <small class="error">Please enter your password.</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-3 medium-offset-3 large-2 large-offset-4 columns">
                            <input id="remember" type="checkbox" name="remember" value="1" />
                            <label for="remember">Remember me</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-6 medium-offset-3 large-4 large-offset-4 columns">
                            <button class="button expand radius"><i class="fa fa-check"></i> Log in</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-6 medium-offset-3 large-4 large-offset-4 columns">
                            <a class="button small info expand radius" href="/password/email">Forgotten your password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
