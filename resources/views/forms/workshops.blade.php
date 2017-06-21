<input type="hidden" name="_token" value="{{ csrf_token() }}">
<p>
    <label class="required" for="name">
        Workshop Name
    </label>
@if ($errors->has('name'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('name')!!}</p>@endif
{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Workshop Name']) !!}
</p>
<p>
    <label class="required" for="description">
        Workshop Description
    </label>
@if ($errors->has('description'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('description')!!}</p>@endif
{!! Form::textarea('description', null, ['class' => 'form-control', 'name' => 'description', 'placeholder' => 'Workshop Description']) !!}
@push('scripts')
<script src="https://cdn.ckeditor.com/4.7.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description' );
</script>
@endpush
</p>

<p>
    <label class="required" for="date">
        Date
    </label>
@if ($errors->has('date'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('date')!!}</p>@endif
{!! Form::text('date', null, ['class' => 'form-control']) !!}
</p>
@push('scripts')
<script type="text/javascript">
    $(function () {
        $('input[name="date"]').daterangepicker({
            "singleDatePicker": true,
            "showDropdowns": true,
            "minDate": moment()
        }, function (start, end, label) {
            console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
        });
    });
</script>
@endpush
</p>
<p>
<p>
    <label class="required" for="seats">
        Seats Available<br>
        <small>
            @if(isset($room))
                {{ $room->name }} has a maximum capacity of {{ $room->capacity }} seats.
            @endif
        </small>
    </label>
@if ($errors->has('seats'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('seats')!!}</p>@endif
{!! Form::number('seats', null, ['class' => 'form-control']) !!}
</p>
</p>
<div class="row">
    <div class="col-md-6">
        <p>
            <label class="required" for="start_time">
                Start Time
            </label>
        @if ($errors->has('start_time'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('start_time')!!}</p>@endif
        {!! Form::time('start_time', null, ['class' => 'form-control']) !!}
        </p>
    </div>
    <div class="col-md-6">
        <p>
            <label class="required" for="end_time">
                End Time
            </label>
        @if ($errors->has('end_time'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('end_time')!!}</p>@endif
        {!! Form::time('end_time', null, ['class' => 'form-control']) !!}
        </p>
    </div>
</div>
<p>
    <label class="required" for="room_id">
        Room
    </label>
@if ($errors->has('room_id'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('room_id')!!}</p>@endif
{!! Form::select('room_id', $rooms, null, ['class' => 'form-control', 'placeholder' => 'Pick a room...']) !!}
</p>