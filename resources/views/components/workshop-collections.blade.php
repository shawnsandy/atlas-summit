<aside class="col-md-4">

    <div class="wrapper">
        <div class="cover" style="background-image: url(/img/workshops/{{ $workshop->cover_image }}); background-position: center center; overflow: hidden; background-size: cover ">
            {{--<img class="img-responsive" src="/img/workshops/{{ $workshop->cover_image }}" alt="workshop image">--}}


        </div>
        <div class="details">
            <h3 class="oswald text-uppercase">
                <a href="/summit/u/{{ $workshop['id'] }}">{{ $workshop["name"] or "Workshop Name" }}</a></h3>
            <hr>
            <div class="workshop-widget-description">
                {{ $slot }}
            </div>

            <div class="action-call">
                <p class="text-uppercase">
                    <a href="/summit/u/{{ $workshop['id'] }}" class="btn btn-block btn-primary btn-lg oswald">
                        Register Now
                    </a>
                </p>
            </div>

            <div class="meta small">
                <p class="text-success  small text-center">
                  {{ $workshop["date"] }} | Seats {{ $workshop['seats'] }}
                </p>
            </div>

        </div>
    </div>

</aside>
