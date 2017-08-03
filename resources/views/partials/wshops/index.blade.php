@extends('theme.page.page-layouts.main-page')
@section('title', "WorkShop Scheulde")
@section('content')
    <section class="">
        <div class="container">
            <p class="h1 text-center">
                Workshops
            </p>

            <div class="workshops">
                @if(count($workshops))

                    @foreach($workshops as $workshop)

                        @component("components.workshop-collections", ["workshop" => $workshop])
                            <p>{!! $workshop->short_description !!}</p>
                        @endcomponent

                    @endforeach
                @else
                    <p class="alert alert-info lead text-center">
                        The are no workshops available currently
                    </p>
                @endif

            </div>

        </div>
    </section>

@endsection
