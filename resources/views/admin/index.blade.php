@extends('layouts.dashboard')
@section('title', ':package_name')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="panel panel-blue panel-widget ">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">{{ count($users) }}</div>
                            <div class="text-muted">Registered Users</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="panel panel-orange panel-widget">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">{{ count($rooms) }}</div>
                            <div class="text-muted">Total Rooms</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="panel panel-teal panel-widget">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked star"><use xlink:href="#stroked-star"/></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">{{ count($sponsors) }}</div>
                            <div class="text-muted">Total Sponsors</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="panel panel-red panel-widget">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">{{ count($workshops) }}</div>
                            <div class="text-muted">Total Workshops</div>
                        </div>
                    </div>
                </div>


            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-9">
                <div class="panel panel-default">
                    <div class="panel-heading">User Registrations</div>
                    <div class="panel-body">
                        <div class="canvas-wrapper">
                            <div id="users" style="height: 350px;"></div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p class="lead">Import Users From CSV</p>
                        {!! $errors->first('cvs', '<p class="alert alert-danger">:message</p>') !!}

                        @include("imports.form", ["url" => "/admin/users-cvs"])
                        <hr>

                        <p class="lead">Import Speakers From CSV</p>

                        @include("imports.form", ['url' => '/admin/speakers-cvs'])
                        <hr>

                        <p class="lead">Import Workshops From CSV</p>
                        
                        @include("imports.form", ['url' => '/admin/workshop-cvs'])
                        <hr>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Top Workshops</div>
                    <div class="panel-body">
                        <div class="canvas-wrapper">
                            <div style="height: 350px;"></div>

                        </div>
                    </div>
                </div>

            </div>
        </div><!--/.row-->

    </div>	<!--/.main-->
    @include('assets.dashboard.charts')

    @push('scripts')
    <script>
        var start = moment().subtract(30, 'days').format('YYYY-MM-DD');
        var end = moment().add(1, 'days').format('YYYY-MM-DD');
        $(function() {
            // Create a function that will handle AJAX requests
            function requestData(days, chart){
                $.ajax({
                    type: "GET",
                    dataType: 'json',
                    url: "/api/users/"+start+"/"+end // This is the URL to the API
                })
                    .done(function( data ) {
                        // When the response to the AJAX request comes back render the chart with new data
                        chart.setData(data);
                    })
                    .fail(function() {
                        // If there is no communication between the server, show an error
                        alert( "error occurred" );
                    });
            }
            var chart = new Morris.Area({
                // ID of the element in which to draw the chart.
                element: 'users',
                parseTime:false,
                behaveLikeLine:true,
                data: [0, 0], // Set initial data (ideally you would provide an array of default data)
                xkey: 'date', // Set the key for X-axis
                ykeys: ['users'], // Set the key for Y-axis
                lineColors: ['#55AEF8'],
                labels: ['Registrations'] // Set the label when bar is rolled over
            });

            // Request initial data for the past 7 days:
            requestData(90, chart);

            $('ul.open-ranges a').click(function(e){
                e.preventDefault();

                // Get the number of days from the data attribute
                var el = $(this),
                    days = el.attr('data-range');

                // Request the data and render the chart using our handy function
                requestData(days, chart);
            })
        });

    </script>
    @endpush
@endsection
