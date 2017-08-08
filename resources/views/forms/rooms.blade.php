<input type="hidden" name="_token" value="{{ csrf_token() }}">
<p>
    <label class="required" for="name">
        Room Name
    </label>
@if ($errors->has('name'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('name')!!}</p>@endif
{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Room Name']) !!}
</p>
<p>
    <label class="required" for="capacity">
        Room Capacity
    </label>
@if ($errors->has('capacity'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('capacity')!!}</p>@endif
{!! Form::number('capacity', null, ['class' => 'form-control', 'placeholder' => 'Total Room Capacity']) !!}
</p>