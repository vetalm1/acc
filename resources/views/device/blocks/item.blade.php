{{ Breadcrumbs::render('device', $device) }}

<div class="container">
    <H1>Прибор</H1>
    <div class="row">
        <div class="col-md-4 border rounded ">

            <span>#id-{{$device->id}}; </span>
            <span>#user-{{$device->user_id}} </span>
            <span>#fac-{{$device->facility_id}} </span>
            <h3 class="mb-3">{{$device->number}}</h3>
            <h3>{{$device->type}}</h3>
            <h3>{{$device->location}}</h3>
            <p>status = {{$device->status}}</p>
            <span>{{$device->created_at}}</span> |
            <span>{{$device->updated_at}}</span>
        </div>

        <div class="col-md-4 border rounded ml-auto">
            @foreach ($device->indications as $item)
                <sapn class="text-secondary">{{$item->updated_at ?? ''}} </sapn>

                <form method="post" action="{{route('indication.update', ['indication' => $item->id])}}">
                    {{ csrf_field() }}

                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="user_id" value="{{$item->user_id ?? ''}}">
                        <input type="hidden" name="facility_id" value="{{$item->facility_id ?? ''}}">
                        <input type="hidden" name="device_id" value="{{$item->device_id ?? ''}}">
                        <input type="text" name="indication"
                               class=""
                               value="{{$item->indication ?? ''}}"
                               placeholder="Текст сообщения"
                        >

                    <button type="submit" class="btn btn-primary">+</button>
                </form>
            @endforeach
        </div>
    </div>

</div>
