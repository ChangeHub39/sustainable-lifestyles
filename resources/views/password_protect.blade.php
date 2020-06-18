@extends('layouts.master')
@section('content')

    <div id="new">
    <div class="container">
        <p class="lead" style="margin-top: 50px; margin-bottom: 10px;">Please enter the password to access the Sustainable Lifestyles site</p>


        @if(count($errors) > 0)

            <div class="alert alert-danger">There is a mistake in the information you have provided. Please try
                again.
            </div>

        @endif
        <div class="form-group">

        {!! Form::open(['url' => 'password']) !!}


            {!! Form::password('password', null, ['class' => 'form-control']) !!}
            <br>
            <br>

            <p>By accessing this site you agree to our <a  data-toggle="modal" href="#privacyModal">Terms and Conditions</a></p>

            <br>
            <br>

            {!! Form::submit('Access Site', ['class' => 'btn btn-lg btn-success form control'] ) !!}



        {!! Form::close() !!}
        </div>

    </div>
    </div>



@endsection