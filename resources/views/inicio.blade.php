@extends("theme.$theme.layout")
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" >
            <div class="card" >
                <div class="card-header" style="background-color:lightblue">
                   
                                <div class="card-body">
                                   
                                    <h1 class="font-weight-light"> Bienvenido  @auth<span style="color: mediumblue">{{auth()->user()->name}} </span> @endauth al Sis. Doc.</h1>   
 
                                   
                                    </div>
                </div>

              
                
            </div>
        </div>
    </div>
</div>
@endsection