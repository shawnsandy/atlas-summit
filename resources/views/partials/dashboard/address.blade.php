<p>
    <label class="required" for="location">Address</label>
@if ($errors->has('address'))
    <p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('address')!!}</p>
@endif

@if ($errors->has('lat'))
    <p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('lat')!!}
    </p>
@endif

@if ($errors->has('long'))
    <p class="alert alert-danger" style="font-weight: bold;">{!! $errors->first('long')!!}
    </p>
    @endif

    <?php
    if (isset($profile)) {
        $address = $profile->address;
    } else {
        $address = null;
    }
    ?>

    {!! Form::text('address_info_temp', $address, ['class' => 'form-control', 'id' => 'address_info_temp']) !!}
    </p>

    <p>
        {!! Form::hidden('address', null, ['class' => 'form-control address']) !!}
        {!! Form::hidden('lat', null, ['class' => 'lat']) !!}
        {!! Form::hidden('long', null, ['class' => 'long']) !!}
    </p>


    @push('styles')
    @endpush
    @push('scripts')
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIhNEuGvQSSoli7KVZFMhLvxSWZZeZxO0&libraries=places"></script>
    <script type="text/javascript">
        $('#address_info_temp').keypress(function(e) {
            if(event.which == 13) {
                event.preventDefault();
                //alert('You pressed enter!');
            }
        });
        google.maps.event.addDomListener(window, 'load', function () {
            //$('.address-info').hide();
            var places = new google.maps.places.Autocomplete(document.getElementById('address_info_temp'));
            google.maps.event.addListener(places, 'place_changed', function () {
                var place = places.getPlace();
                var address = place.formatted_address;
                $('.lat').val(place.geometry.location.lat());
                $('.long').val(place.geometry.location.lng());
                $('.address').val(place.formatted_address);
                console.log(places);
                console.log(place);
                console.log(address);
            });
        });
    </script>
    @endpush