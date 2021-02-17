
<div class="container">
    <H1>Прибор</H1>
    <div class="row">
        <div class="col-md-4 border rounded ">

            <span>#id-{{$device->id}}; </span>
            <span>#user-{{$device->user_id}} </span>
            <h3 class="mb-3">{{$device->town}}</h3>
            <h3>{{$device->address}}</h3>
            <p>status = {{$device->status}}</p>
            <span>{{$device->created_at}}</span> |
            <span>{{$device->updated_at}}</span>
        </div>

{{--        <div class="col-md-4 border rounded ml-auto">--}}
{{--            @foreach ($device->devices as $show)--}}
{{--                <p class="mt-3 border-bottom"><mark>#{{$show->id ?? ''}} - {{$show->number ?? ''}}</mark></p>--}}
{{--                <span class="blockquote text-right">{{$show->type ?? ''}} </span>--}}
{{--                <span class="blockquote text-right">{{$show->location ?? ''}} </span>--}}
{{--                <span class="blockquote text-right">{{$show->status ?? ''}} </span>--}}

{{--                <form method="post" action="{{route('indication.store')}}">--}}
{{--                    {{ csrf_field() }}--}}
{{--                    <div class="form-group">--}}
{{--                        <input type="hidden" name="user_id" value="{{$show->user_id ?? ''}}">--}}
{{--                        <input type="hidden" name="facility_id" value="{{$show->facility_id ?? ''}}">--}}
{{--                        <input type="hidden" name="device_id" value="{{$show->id ?? ''}}">--}}
{{--                        <input type="text" name="indication" class="form-control" placeholder="Текст сообщения">--}}
{{--                    </div>--}}

{{--                    <button type="submit" class="btn btn-primary">+</button>--}}
{{--                </form>--}}
{{--            @endforeach--}}
{{--        </div>--}}
    </div>

</div>
