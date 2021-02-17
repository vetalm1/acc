
<H1>Создать объект</H1>
<form method="post" action="{{route('device.store')}}">
{{ csrf_field() }}
    <div class="form-group">

        <label>Номер прибора</label>
        <input type="text" name="number" class="form-control" required>

        <br>
        <label >Тип</label>
        <input type="text" name="type" class="form-control" required>

        <br>
        <label >Расположение</label>
        <input type="text" name="location" class="form-control" required>

        <br><br>
        <label >Статус</label>
        <select class="custom-select " required name="status">
            <option selected value="1">Активный</option>
            <option value="0">Не активный</option>
        </select>
    </div>

    <input type="hidden" name="facility_id" value="{{$facility->id}}">
    <input type="hidden" name="user_id" value="{{$facility->user_id}}">

    <button type="submit" class="btn btn-primary">Добавить</button>
</form>
