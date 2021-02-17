<br>
<table class="table table-sm table-bordered">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">U</th>
        <th scope="col">F</th>
        <th scope="col">D</th>
        <th scope="col">Показание</th>
        <th scope="col">Фото</th>
        <th scope="col">Дата</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($indication as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->user_id}}</td>
            <td>{{$item->facility_id}}</td>
            <td>{{$item->device_id}}</td>
            <td>{{$item->indication}}</td>
            <td>{{$item->indication_photo}}</td>
            <td>{{$item->updated_at}}</td>

            <td>
                <div class="container">
                    <div class="row">
                        <a class="btn btn-primary mr-1" href="{{route('indication.show',['indication' => $item->id] )}}">V</a>
                        <a class="btn btn-warning mr-1" href="{{route('indication.edit',['indication' => $item->id] )}}">U</a>
                        @include('indication.blocks.forms.delete', ['id'=>$item->id])
                    </div>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>