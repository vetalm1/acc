<form method="post" action="/device/{{$id}}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit" class="btn btn-danger">D</button>
</form>