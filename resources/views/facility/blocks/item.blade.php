
{{ Breadcrumbs::render('facility', $facility) }}

<span class="text-primary">
    @if(Session::has('status'))
        {{ Session::get('status') }}
    @endif
</span>

<div class="container">
    <H1>Объект</H1>
    <div class="row">
        <div class="col-md-4 border rounded ">
            <span>#id-{{$facility->id}}; </span>
            <span>#user-{{$facility->user_id}} </span>
            <h4 class="mb-3">{{$facility->town}}</h4>
            <h4>{{$facility->address}}</h4>

            <div class="row">
                <a class="primary ml-3" href="{{route('device.create',['device' => $facility->id])}}">Добавить прибор</a>
            </div>

            <div class="row">
                <a class="primary ml-3" href="{{route('report',['facility' => $facility->id])}}">Отчет</a>
            </div>

        </div>

        <div class="col-md-4 border rounded ml-auto">
            @foreach ($facility->devices as $item)

                <a href="{{route('device.show',['device' => $item->id])}}">№ - {{$item->number ?? ''}} </a>

                <span class=""> - ({{$item->type ?? ''}})</span> <br>
                <span class="">{{$item->location ?? ''}} </span> <br>

                <span>{{$item->last_indication->pre_last_indication ?? ''}}</span>
                <i> - ({{$item->last_indication->pre_last_date ?? ''}})</i> <br>
                <span>{{$item->last_indication->last_indication ?? ''}}</span>
                <i> - ({{$item->last_indication->updated_at ?? ''}})</i> <br>

                <form method="post" action="{{route('indication.store')}}">
                    {{ csrf_field() }}

                    <input type="hidden" name="user_id" value="{{$item->user_id ?? ''}}">
                    <input type="hidden" name="facility_id" value="{{$item->facility_id ?? ''}}">
                    <input type="hidden" name="device_id" value="{{$item->id ?? ''}}">
                    <input type="text" name="indication" value=""  placeholder="введите показания">

                    <button type="submit" class="btn btn-primary">+</button>
                </form>
                <br>
            @endforeach
        </div>
    </div>

</div>
