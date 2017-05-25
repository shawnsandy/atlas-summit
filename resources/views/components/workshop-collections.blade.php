<aside class="col-md-4">
    <div class="wrapper">
        <div class="cover">
            <img src="" alt="">
        </div>
        <div class="details">
            <h3 class="oswald text-uppercase">{{ $title or "Workshop Name" }}</h3>
            <hr>
            <p>
                {{ $slot }}
            </p>
            <div class="action-call">
                <p>
                    <a href="" class="btn btn-block btn-primary btn-lg oswald">
                        Register Now
                    </a>
                </p>
            </div>

            <div class="meta small text-right">

                <p class="oswald text-muted">
                    38 Seats | 8 Available
                </p>
            </div>

        </div>
    </div>

</aside>
