@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Set up Google Authenticator</div>

                <div class="panel-body" style="text-align: center;">
                    <p>Set up you 2FA by scanning the barcode below. Alternatively, you can use the code {{ $secret }}</p>
                    <div>
                        <img src="{{ $QR_Image }}">
                    </div>
                    <p>You must set up your Google Authenticator app before continuing. You will be unable to login otherwise</p>
                    <div>
                        <a href="/complete-registration"><button class="btn-primary">Complete Registration</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
