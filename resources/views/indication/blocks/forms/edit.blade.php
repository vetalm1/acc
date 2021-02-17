
<form method="post" action="{{route('indication.update',['indication' => $indication->id] )}}">
    {{ csrf_field() }}
    <div class="form-group">
        <h1> Редактировть показание</h1>


        <label >Показание</label>
        <input type="text" name="indication" value="{{$indication->indication}}" class="form-control" >

        <label >Фото</label>
        <input type="text" name="indication_photo" value="{{$indication->indication_photo}}" class="form-control" >

        <label >Дата</label>
        <input type="text" name="status" value="{{$indication->updated_at}}" class="form-control" >

        <input type="hidden" name="user_id" value="{{$indication->user_id}}">
        <input type="hidden" name="facility_id" value="{{$indication->facility_id}}">
        <input type="hidden" name="device_id" value="{{$indication->device_id}}">

        <input type="hidden" name="_method" value="PUT">
    </div>

    <button type="submit" class="btn btn-primary">Обновить</button>
</form>