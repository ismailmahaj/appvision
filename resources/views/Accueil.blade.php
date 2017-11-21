@extends('template.head')
@extends('template.nav')

@section('content')

           <div class="row margin-top">
        <div class="bg_quiz col-xs-6 col-md-6">
            <center>
                <a href="#">
                    <img class="img img-responsive" src="{{ asset('img/1.png')}}" alt="">
                </a>
            </center>
            <center>

                <p class="color_white">START A <br> NEWQUIZZ</p>
            </center>
        </div>
        <div class="bg_event col-xs-6 col-md-6">

            <center>
                <a href="##">
                    <img class="img img-responsive" src="{{ asset('img/4.png')}}" alt="">
                </a>
            </center>
            <center>
                <p class="color_white">FIND AN <br> EVENT</p>
            </center>
        </div>
    </div>
    <div class="row">
        <div class=" bg_violet col-xs-4 col-md-4">
            <img class="img img-responsive" src="{{ asset('img/3.png')}}" alt="">
        </div>
        <div class="col-md-8 col-xs-8 ">
            <center>
                <br>
                <a style="color:#337ab7;"href="">
                    <p class="font-size-parti">MY PARTIES</p>
                </a>
            </center>
          
            
            </div>
        </div>
    </div>
    <div class="row">
        <div class="bg_vert col-xs-4 col-md-4">
            <img class="img img-responsive" src="{{ asset('img/2.png')}}" alt="">
        </div>
        <div class=" col-xs-8 col-md-8">
            <br>
                <center>
                    
                        <a href="">
                            <p class="font-size-parti">MY STATISTICS</p>
                        </a>
                    </center>
        </div>
    </div>
    <div class="row">
        <div class="bg_vertf col-xs-4 col-md-4">
            <img class="img img-responsive" src="{{ asset('img/5.png')}}" alt="">
        </div>
        <div class="col-md-8 col-xs-8 ">
                <center>
                    <br>
                        <a href="">
                            <p class="font-size-parti">FRIENDS</p>
                        </a>
                    </center>
        </div>
    </div>
      
@endsection




@extends('template.footer')



