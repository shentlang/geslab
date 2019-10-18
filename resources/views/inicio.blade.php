@extends("theme.$theme.layout")
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" >
            <div class="card" >
                <div class="card-header" style="background-color: slategray">
                    <h1>bienvenido
                            @auth
                               <li class="nav-item d-none d-sm-inline-block">
                                <h2><p class="text-white" >{{auth()->user()->name}}</p></h2>   
                                 </li>
                               @endauth
                                </h1><h1>Sistema Ges. Doc</h1>
                </div>

              
                
            </div>
        </div>
    </div>
</div>
@endsection