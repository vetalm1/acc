
<div class="container">
    <H1>Прибор</H1>
    <div class="row">
        <div class="col-md-4 border rounded ">
            <span>#id-{{$indication->id}}; </span>
            <span>#user-{{$indication->user_id}} </span>
            <span>#fac-{{$indication->facility_id}} </span>
            <span>#dev-{{$indication->device_id}} </span>
            <br>
            <span>{{$indication->indication}} </span>
            <span>{{$indication->indication_photo}} </span>
            <br>
            <span>{{$indication->updated_at}}</span>
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
