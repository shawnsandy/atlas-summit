@extends("dash::layouts.layout")
@section('title', 'Admin dashboard')
@section("content")

    <div class="container-fluid">

        <div class="row">


            <div class="col-md-9 form-component">
                @component("dash::components.panels.dashboard", ["title" => "Workshops"])
                    <a href="/dashboard/workshops/create" class="btn btn-primary">Create a Workshop</a>
                    <hr>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
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
