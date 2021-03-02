
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

        <br>
        <label >Коэффициент</label>
        <input type="text" name="ratio" value="{{$device->ratio}}" class="form-control" required>

        <br>
        <label >Тип Учета</label>
        <select class="custom-select " required name="acc_type">
            <option selected value="{{$device->acc_type}}">{{$device->acc_type}}</option>
            <option value="внутренний">Внутренний</option>
            <option value="внешний">Внешний</option>
        </select>

        <br>
        <label>Примечание</label>
        <input type="texy" name="note" value="{{$device->note}}" class="form-control">

        <label >Статус</label>
        <select class="custom-select " required name="status">
            <option selected value="{{$device->status}}">{{$device->status}}</option>
            <option selected value="1">Активный</option>
            <option value="0">Не активный</option>
        </select>

        <input type="hidden" name="user_id" value="{{$device->user_id}}">

        <input type="hidden" name="_method" value="PUT">
    </div>

    <button type="submit" class="btn btn-primary">Обновить</button>
</form>