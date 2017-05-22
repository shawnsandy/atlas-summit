@extends("dash::layouts.layout")
@section('title', ':package_name')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Dashboard content -->
            <div class="col-md-9">
                <section class="widgets">
                    <div class="col-md-12">
                        <div class="row">
                            @component("dash::components.panels.dashboard", ['title' => "User Admin"])
                                {{ Html::dataTable($users, ["id", "first_name", "last_name", "email", "created_at"],  ['page_length' => 15, 'order' => "desc", "edit_url" => '/admin/users/'], ['class' => 'data-table'] ) }}
                            @endcomponent
                        </div>
                    </div>
                </section>
            </div>

            <!--  side bar -->

            <div class="col-md-3">

                @component("components.widgets", ["title" => "Sponsors"])
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                @endcomponent

                @component("dash::components.panels.info", ["title" => "Users"])
                    <h3>{{ count($users) }} Registered Users</h3>
                @endcomponent

                @component("dash::components.panels.widget", ["title" => "Add New User(s)"])

                    {{ config(["dash.forms.users.field_types.password" => "text"]) }}
                    {{ Form::createForm('App\User', "admin/users") }}

                @endcomponent

            </div>
        </div>
    </div>
@endsection
