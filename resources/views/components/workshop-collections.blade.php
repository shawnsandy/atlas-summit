<aside class="col-md-4">

    <div class="wrapper">
        <div class="cover">
            <img src="" alt="">
        </div>
        <div class="details">
            <h3 class="oswald text-uppercase">{{ $workshop["name"] or "Workshop Name" }}</h3>
            <hr>
            <p>
                {{ $slot }}
            </p>

            <div class="action-call">
                <p>
                    <a href="/summit/u/{{ $workshop['id'] }}" class="btn btn-block btn-primary btn-lg oswald">
                        Register Now
                    </a>
                </p>
            </div>

            <div class="meta small">

                <p class="text-muted  small">
                  {{ $workshop["date"] }} |  38 Seats | 8 Available
                </p>
            </div>

        </div>
    </div>

</aside>
