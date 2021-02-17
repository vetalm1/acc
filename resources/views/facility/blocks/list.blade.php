<br>
<table class="table table-sm table-bordered">
    <thead>
    <tr>
        <th scope="col">User</th>
        <th scope="col">Город</th>
        <th scope="col">Адрес</th>
        <th scope="col">Статус</th>
        <th scope="col">Обновл</th>
        <th scope="col">action</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($facility as $item)
        <tr>
            <td>{{$item->user->name}}</td>
            <td><a class="" href="{{route('facility.show',['facility' => $item->id] )}}">{{$item->town}}</a></td>
            <td>{{$item->address}}</td>
            <td>{{$item->status}}</td>
            <td>{{$item->updated_at}}</td>

            <td>
                <div class="container">
                    <div class="row">
                        <a class="btn btn-warning mr-1" href="{{route('facility.edit',['facility' => $item->id] )}}">U</a>
                        @include('facility.blocks.forms.delete', ['id'=>$item->id])
                    </div>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>