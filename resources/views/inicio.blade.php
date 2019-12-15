@extends("theme.$theme.layout")
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" >
            <div class=" animated fadeInDown slow" style=" background-color: #12cefb; border-radius: 97px 0px 97px 0px;
            -moz-border-radius: 97px 0px 97px 0px;
            -webkit-border-radius: 97px 0px 97px 0px;
            border: 12px double #ffffff;">
                <div class="card-header" style="background-color:#12cefb;border-radius: 70px 0px 70px 0px;
                -moz-border-radius: 70px 0px 70px 0px;
                -webkit-border-radius: 70px 0px 70px 0px;
                ">
                   
                                <div class="card-body">
                                   
                                    <h1 style="font-family: 'Fredericka the Great', cursive" class="animated bounceInLeft delay-3s"> Bienvenido  @auth<span style="color: mediumblue">{{auth()->user()->name}} </span> @endauth al Sis. Doc.</h1>   
 
                                   
                                    </div>
                </div>

              
                
            </div>
        </div>
    </div>
</div>
@endsection