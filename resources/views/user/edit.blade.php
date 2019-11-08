@extends("theme.$theme.layout")
@section('content')


<section class="content">
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">


                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


                <div class="card">
                  
                      
                    <!-- /.card-header -->
                    <div class="card-body">
                            <div class="card-header">
                                    <h1 class="card-title">editar rol</h1>
                                    <br>
                                    <div class="form-group">
                                            <p><b>nombre:</b> {{$user->name}}
                                            </p>
                    
                                            <p><b>email:</b> {{$user->email}}</p>
                                            <form action="{{route('user.update', $user->id)}}" method="POST">
                                                @csrf
                                                {!! method_field('PUT') !!}
                                                <select name="role" class="form-control">
                                                    <option value="{{$user->role_id}}" select>{{$user->role->nombrerol}}
                                                        V.anterior</option>
                                                        @foreach ($rol as $item)
                                                        <option value="{{$item->id}}" select>{{$item->nombrerol}}</option>
                        
                                                        @endforeach
                    
                                                </select><br>
                                                <a href="{{ route('user.index') }}" class="btn btn-danger">Cancelar</a>
                                                <button type="submit" class="btn btn-primary">editar nota</button>
                                            </form>
                    
                                        </div>
            
                                    </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

</section>


@endsection