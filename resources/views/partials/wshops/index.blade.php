@extends('theme.page.page-layouts.main-page')
@section('title', "WorkShop Scheulde")
@section('content')
    <section class="">
        <div class="container">
            <p class="h1 text-center">
                Workshops
            </p>

            <div class="workshops">

                @foreach($workshops as $workshop)

                    @component("components.workshop-collections", ["workshop" => $workshop])
                      <p>{!! $workshop->short_description !!}</p>
                    @endcomponent

                @endforeach

            </div>

        </div>
    </section>
   
@endsection
