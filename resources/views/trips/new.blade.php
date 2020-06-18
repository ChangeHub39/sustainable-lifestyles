@extends('layouts.master')

@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div id="new">
        <h1>Lifestyle Mapping</h1>
        <div class="container">
            <h3>Welcome to Step 1 of your personalised lifestyle mapping.</h3>
            <p style="text-align: left">We are going to ask you a series of questions about your lifestyle to help devise a personalised
                plan for cutting your carbon emissions. There are no right or wrong answers here. We won’t
                share your data or details with anyone.</p>
            <ul  style="text-align: left">
                <li>Gather electricity and gas bills and note your car mileage, before you start</li>
                <li>Use google maps to estimate travel distance where you need to.</li>
                <li>Estimate amounts where you need to.</li>
            </ul>
        </div>

        <div class="container">
            {!! Form::open(['url' => 'new']) !!}

            @if(count($errors) > 0)

                <div class="alert alert-danger">There is a mistake in the information you have provided. Please try
                    again.
                </div>

            @endif
            <div class="form-group">


                <h3 style="padding-top: 20px; padding-bottom: 10px;">1. Transport</h3>

                {!! Form::hidden('user_id', Auth::user()->id) !!}


                {!! Form::label('title', 'How many car trips per week?') !!}
                <div class="row">
                    <div class="col-md-4">
                        {!! Form::label('car_less_than_3km', '<3km') !!}
                        {!! Form::text('car_less_than_3km', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('car_three_to_ten', '3-10km') !!}
                        {!! Form::text('car_three_to_ten', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('car_greater_than_10', '>10km') !!}
                        {!! Form::text('car_greater_than_10', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
                    </div>
                </div>


                <br>
                {!! Form::label('own_bike', 'Do you own a bike') !!}
                {!! Form::select('own_bike', array('Yes' => 'Yes' , 'No' => 'No'), null, ['class' => 'form-control'] ) !!}


                <br>
                {!! Form::label('public_transport', 'How many bike trips per week?') !!}
                <div class="row">
                    <div class="col-md-6">
                        {!! Form::label('bike_trips', 'Number of trips') !!}
                        {!! Form::text('bike_trips', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('bike_kms', 'Approx KMs per trip') !!}
                        {!! Form::text('bike_kms', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
                    </div>
                </div>

                <br>
                {!! Form::label('public_transport', 'How many public transport trips per week?') !!}
                <div class="row">
                    <div class="col-md-6">
                        {!! Form::label('public_transport_trips', 'Number of trips') !!}
                        {!! Form::text('public_transport_trips', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('public_transport_kms', 'Approx KMs per trip') !!}
                        {!! Form::text('public_transport_kms', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
                    </div>
                </div>

                <br>
                {!! Form::label('rideshare_transport', 'How many Uber/Zoomy/Ola rides per week?') !!}
                <div class="row">
                    <div class="col-md-6">
                        {!! Form::label('rideshare_trips', 'Number of trips') !!}
                        {!! Form::text('rideshare_trips', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('rideshare_kms', 'Approx KMs per trip') !!}
                        {!! Form::text('rideshare_kms', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
                    </div>
                </div>

                <br>
                {!! Form::label('carshare', 'Enter the name of any car sharing platfroms you use?') !!}
                {!! Form::text('carshare', null, ['class' => 'form-control', 'placeholder' => 'E.g. Yourdrive']) !!}


                <h3 style="padding-top: 20px; padding-bottom: 10px;">2. Waste</h3>

                {!! Form::label('title', 'Do you recycle?') !!}
                <div class="row">
                    <div class="col-md-3">
                        {!! Form::label('plastic_bins', 'Plastics (bins per month)') !!}
                        {!! Form::text('plastic_bins', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
                    </div>
                    <div class="col-md-3">
                        {!! Form::label('glass_bins', 'Glass (bins per month)') !!}
                        {!! Form::text('glass_bins', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
                    </div>
                    <div class="col-md-3">
                        {!! Form::label('paper_cardboard_bins', 'Paper/cardboard (bins per month)') !!}
                        {!! Form::text('paper_cardboard_bins', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
                    </div>
                    <div class="col-md-3">
                        {!! Form::label('landfill_bins', 'Landfill (bins per month)') !!}
                        {!! Form::text('landfill_bins', null, ['class' => 'form-control', 'placeholder' => '0']) !!}
                    </div>
                </div>


                <h3 style="padding-top: 20px; padding-bottom: 10px;">3. Energy</h3>

                <br>

                {!! Form::label('elec_kw', 'Electricity (kw per month))') !!}
                {!! Form::text('elec_kw', null, ['class' => 'form-control', 'placeholder' => '0']) !!}

                <br>
                {!! Form::label('elec_supplier', 'Supplier') !!}
                {!! Form::text('elec_supplier', null, ['class' => 'form-control', 'placeholder' => 'E.g. Contact Energy']) !!}

                <br>

                {!! Form::label('smart_meter', 'Do you have a smart meter?') !!}
                {!! Form::select('smart_meter', array('Yes' => 'Yes' , 'No' => 'No'), null, ['class' => 'form-control'] ) !!}

                <br>

                {!! Form::label('gas_kw', 'Gas (kw per month))') !!}
                {!! Form::text('gas_kw', null, ['class' => 'form-control', 'placeholder' => '0']) !!}

                <br>
                {!! Form::label('gas_supplier', 'Supplier') !!}
                {!! Form::text('gas_supplier', null, ['class' => 'form-control', 'placeholder' => 'E.g. Contact Energy']) !!}


                <br>
                {!! Form::label('woodburner', 'Do you have a woodburner for heating?') !!}
                {!! Form::select('woodburner', array('Yes' => 'Yes' , 'No' => 'No'), null, ['class' => 'form-control'] ) !!}

                <br>
                {!! Form::label('burn_material', 'What do you burn?') !!}
                {!! Form::text('burn_material', null, ['class' => 'form-control', 'placeholder' => '']) !!}

                <br>
                <br>

                {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-success form control pull-right'] ) !!}
                <a href="mytrips/{{ Auth::user()->id }}" class="btn btn-primary btn-lg pull-left"><span
                            class="glyphicon glyphicon-road"></span> My Trips</a>
                <a href="dashboard" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-dashboard"></span>
                    Dashboard</a>


            </div>


            {!! Form::close() !!}

        </div>

@endsection
