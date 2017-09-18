@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('2fa') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="one_time_password" class="col-md-4 control-label">One Time Password</label>

                            <div class="col-md-6">
                                <input id="one_time_password" type="number" class="form-control" name="one_time_password" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
