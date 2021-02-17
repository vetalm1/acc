
<div class="container">
    <H1>Прибор</H1>
    <div class="row">
        <div class="col-md-4 border rounded ">
            <span>#id-{{$indication->id}}; </span>
            <span>#user-{{$indication->user_id}} </span>
            <span>#fac-{{$indication->facility_id}} </span>
            <span>#dev-{{$indication->device_id}} </span>
            <br>
            <span>{{$indication->indication}} </span>
            <span>{{$indication->indication_photo}} </span>
            <br>
            <span>{{$indication->updated_at}}</span>
        </div>
</div>