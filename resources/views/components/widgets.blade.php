<div class="panel info-component">
    <div class="clearfix">
        <div class="col-md-3 h1" style="font-size: 36px">
            {{ Html::entypoFont((isset($icon)) ?  $icon : "vinyl") }}
        </div>
        <div class="col-md-9">
            <p class="h5 text-uppercase">
              {{ Html::entypoFont("chevron-right") }}  {{ $title or "..." }}</p>

            {{ $slot }}
        </div>
    </div>
</div>
