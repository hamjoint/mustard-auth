@extends(config('mustard.views.layout', 'mustard::layouts.master'))

@section('title')
    Unverified email address
@stop

@section('content')
    <div class="unverified-email">
        <div class="row">
            <div class="large-12 columns">
                <h1>Please verify your email address</h1>
                <p>To use your account you must click the link sent to your email address. We need to be sure that your email address is correct, so that you can be notified of activity on your account.</p>
                <form method="post" action="/email/resend">
                    {!! csrf_field() !!}
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
