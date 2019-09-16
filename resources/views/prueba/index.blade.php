

    <label for="tutores">tutores</label>
    <select name="tutor_id" class="form-control">
        <option value="0" selected>ninguno</option>
        @foreach($personas as $data)
        <option value="{{$data->id}}">{{$data->id}} {{$data->nombre}} {{$data->apellidop}}</option>
        @endforeach
    </select>