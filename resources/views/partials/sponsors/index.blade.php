@extends("dash::layouts.layout")
@section("title", "Sponsors Admin")
@section("content")
    <div class="container-fluid">
        <div class="col-md-9">
            @component("dash::components.panels.dashboard", ["title" => "Sponsors"])
                <p>
                    <a href="/dashboard/sponsors/create" class="btn btn-primary"> Add a Sponsor</a>
                </p>
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
        </div>
        <div class="col-md-3">
            @component("components.widgets")
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aspernatur at blanditiis eos impedit
                    maxime nesciunt officiis repellat ullam veniam.</p>
            @endcomponent
        </div>

    </div>
@endsection
