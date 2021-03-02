{{ Breadcrumbs::render('report', $facility) }}

<span class="text-primary">
    @if(Session::has('status'))
        {{ Session::get('status') }}
    @endif
</span>

<table class="table table-sm table-bordered">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Номер</th>
        <th scope="col">Тип</th>
        <th scope="col">Расположение</th>
        <th scope="col">Предыдущее</th>
        <th scope="col">Текущее</th>
        <th scope="col">Разница</th>
        <th scope="col">К</th>
        <th scope="col">Разница*К</th>

        <th scope="col">Действ.</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($facility->devices as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td><a class="" href="{{route('device.show',['device' => $item->id] )}}">{{$item->number}}</a></td>
            <td>{{$item->type}}</td>
            <td>{{$item->location}}</td>
            <td>{{$item->last_indication->pre_last_indication ?? ''}}</td>
            <td>{{$item->last_indication->last_indication ?? ''}}</td>
            <td>{{$item->last_indication->last_indication-$item->last_indication->pre_last_indication  ?? ''}}</td>
            <td>{{$item->ratio ?? ''}}</td>
            <td>{{($item->last_indication->last_indication-$item->last_indication->pre_last_indication)*$item->ratio  ?? ''}}</td>
            <td>      </td>
        </tr>
    @endforeach
    </tbody>
</table>