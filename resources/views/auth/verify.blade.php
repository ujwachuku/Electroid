@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="float-left mt-2 h4">Verify your email address</div>
                </div>

                <div class="card-body text-center">
                    <div class="py-4">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @else
                            <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                            <p>{{ __('If you did not receive the email click the button below to request another.') }}</p>
                            <div><a href="{{ route('verification.resend') }}" class="btn btn-primary">{{ __('Request Link') }}</a></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
