
<form method="post" action="{{route('device.update',['device' => $device->id] )}}">
    {{ csrf_field() }}
    <div class="form-group">
        <h1> Редактирование объекта</h1>


        <label >Номер прибора</label>
        <input type="text" name="number" value="{{$device->number}}" class="form-control" >

        <label >Тип прибора</label>
        <input type="text" name="type" value="{{$device->type}}" class="form-control" >

        <label >Расположение прибора</label>
        <input type="text" name="location" value="{{$device->location}}" class="form-control" >

        <label >Статус</label>
        <input type="text" name="status" value="{{$device->status}}" class="form-control" >

        <input type="hidden" name="user_id" value="{{$device->user_id}}">

        <input type="hidden" name="_method" value="PUT">
    </div>

    <button type="submit" class="btn btn-primary">Обновить</button>
</form>