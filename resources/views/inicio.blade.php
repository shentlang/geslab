@extends("theme.$theme.layout")
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">bienvenidos
                     @auth
                        <li class="nav-item d-none d-sm-inline-block">
                         <h2><p class="text-primary" >{{auth()->user()->name}}</p></h2>   
                          </li>
                        @endauth
                         al sistema informatico gestion documental </div>

                
            </div>
        </div>
    </div>
</div>
@endsection