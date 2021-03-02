
{{ Breadcrumbs::render('device-create', $facility) }}

<H1>Создать объект</H1>

<span class="text-primary">
    @if(Session::has('status'))
        {{ Session::get('status') }}
    @endif
</span>

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

        <br>
        <label >Коэффициент</label>
        <input type="text" name="ratio" value="1" class="form-control" required>

        <br>
        <label >Тип Учета</label>
        <select class="custom-select " required name="acc_type">
            <option selected value="внутреннй">Внутренний</option>
            <option value="внешний">Внешний</option>
        </select>

        <br>
        <label>Примечание</label>
        <input type="texy" name="note" class="form-control">

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
