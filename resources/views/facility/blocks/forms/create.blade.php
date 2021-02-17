
<H1>Создать объект</H1>
<form method="post" action="{{route('facility.store')}}">
{{ csrf_field() }}
    <div class="form-group">

        <label>Адрес объекта</label>
        <input type="text" name="address" class="form-control" required>

        <br>
        <label >Город</label>
        <input type="text" name="town" class="form-control" required>

        <br>
        <label >Закрепеленный пользователь</label>
        <select class="custom-select " required name="user_id">
{{--            <option selected value="{{$user->id ?? ''}}">Текущий</option>--}}
            <option value="0">Другой</option>
            @foreach ($usersList as $item)
                <option value="{{$item->id ?? ''}}">{{$item->name ?? ''}}</option>
            @endforeach
        </select>

        <br><br>
        <label >Статус</label>
        <select class="custom-select " required name="status">
            <option selected value="1">Активный</option>
            <option value="0">Не активный</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Добавить</button>
</form>
