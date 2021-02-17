
<form method="post" action="/facility/{{$facility->id}}">
    {{ csrf_field() }}
    <div class="form-group">
        <h1> Редактирование объекта</h1>


        <label >Адрес объекта</label>
        <input type="text" name="address" value="{{$facility->address}}" class="form-control" >

        <label >Город</label>
        <input type="text" name="town" value="{{$facility->town}}" class="form-control" >

        <label >Статус</label>
        <input type="text" name="status" value="{{$facility->status}}" class="form-control" >

        <input type="hidden" name="user_id" value="{{$facility->user_id}}">

        <input type="hidden" name="_method" value="PUT">
    </div>

    <button type="submit" class="btn btn-primary">Обновить</button>
</form>