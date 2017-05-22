<div class="panel info-component">
    <div class="clearfix">
        <div class="col-md-3 h1" style="font-size: 48px">
            {{ Html::entypoFont((isset($icon)) ?  $icon : "vinyl") }}
        </div>

        <div class="col-md-9">
            <p class="h5 text-uppercase">
                {{ Html::entypoFont("circle") }} {{ $title or "..." }}
            </p>
            <hr>
            {{ $slot }}
        </div>
    </div>
</div>
