@extends("dash::layouts.layout")
@section('title', 'Admin dashboard')
@section("content")

    <div class="container-fluid">

        <div class="row">


            <div class="col-md-9 form-component">
                @component("dash::components.panels.dashboard", ["title" => "Workshops"])
                    <a href="/dashboard/workshops/create" class="btn btn-primary">Create a Workshop</a>
                    <hr>
                    <table class="table ">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th> Name</th>
                            <th> Date</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th style="width: 200px"></th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($workshops as $workshop)
                            <tr>
                                <th scope="row">{{ $workshop->id }}</th>
                                <td>{{ $workshop->name }}</td>
                                <td>{{ $workshop->date }}</td>
                                <td>{{ $workshop->start_time }}</td>
                                <td>{{ $workshop->end_time }}</td>
                                <td class="text-right" style="width: 150px">
                                    <a href="/dashboard/workshops/{{$workshop->id}}/edit"
                                       class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                @endcomponent
                @component("dash::components.panels.dashboard", ["title" => "Workshop Analytics"])
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci assumenda deleniti nihil.</p>
                    <div class="canvas-wrapper">
                        <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
                    </div>
                @endcomponent
            </div>

            <div class="col-md-3">
                @component("dash::components.panels.widget", ["title" => "Sponsors List"])
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, vitae!
                @endcomponent
            </div>

        </div>

    </div>

@endsection
