
<H1>Добавить показание</H1>
<form method="post" action="{{route('indication.store')}}">
{{ csrf_field() }}
    <div class="form-group">

        <input type="text" name="indication" placeholder="Введите показание" class="form-control" >

        <label >Фото</label>
        <input type="file" name="indication_photo" class="form-control" >

        <input type="hidden" name="user_id" value="{{$device->user_id}}">
        <input type="hidden" name="facility_id" value="{{$device->facility_id}}">
        <input type="hidden" name="device_id" value="{{$device->id}}">

        <button type="submit" class="btn btn-primary">Добавить</button>

    </div>
</form>
