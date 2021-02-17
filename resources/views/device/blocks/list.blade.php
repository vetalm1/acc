<br>

<h3>{{$device[1]->facility->address}}</h3><br> {{--// TODO не забыть переделать говно--}}


<table class="table table-sm table-bordered">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">U</th>
        <th scope="col">Объект</th>
        <th scope="col">Номер</th>
        <th scope="col">Тип</th>
        <th scope="col">Расположение</th>
        <th scope="col">Статус</th>
        <th scope="col">Дата</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($device as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->user_id}}</td>
            <td>{{$item->facility_id}}</td>
            <td><a class="" href="{{route('device.show',['device' => $item->id] )}}">{{$item->number}}</a></td>
            <td>{{$item->type}}</td>
            <td>{{$item->location}}</td>
            <td>{{$item->status}}</td>
            <td>{{$item->updated_at}}</td>

            <td>
                <div class="container">
                    <div class="row">
                        <a class="btn btn-warning mr-1" href="{{route('device.edit',['device' => $item->id] )}}">U</a>
                        @include('device.blocks.forms.delete', ['id'=>$item->id])
                    </div>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>