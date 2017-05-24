@extends("dash::layouts.layout")
@section('title', ':package_name')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Dashboard content -->

            <div class="col-md-8">
                    <section class="create-user">
                        @component("dash::components.panels.widget", ["title" => "Add New User(s)"])
                            {{ Form::open(['url' => '/admin/users', "class" => "form-horizontal"]) }}
                            {{ Form::dashCustomFields([
                            'first_name' => ["label" => "First Name"],
                            'last_name' => ["label" => "Last Name"],
                            'email' => ["label" => "Email"],
                            ]) }}
                                <button type="submit" class="btn btn-primary">Register User</button>
                            {{ Form::close() }}
                        @endcomponent

                    </section>

                <section class="widgets">
                    <div class="col-md-12">
                        <div class="row">
                            @component("dash::components.panels.dashboard", ['title' => "User Admin"])
                                {{ Html::dataTable($users, [
                                "id", "first_name", "last_name", "email", "created_at"],
                                ['page_length' => 15, 'order' => "desc", "edit_url" => '/admin/users/'],
                                 ['class' => 'data-table'] ) }}
                            @endcomponent
                        </div>
                    </div>
                </section>
            </div>

            <!--  side bar -->

            <div class="col-md-4">
                @component("dash::components.panels.info", ["title" => "Users"])
                    <h3>{{ count($users) }} Registered Users</h3>
                @endcomponent
            </div>
        </div>
    </div>
@endsection
