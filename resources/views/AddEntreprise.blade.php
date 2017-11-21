@extends('template.head')
@extends('template.nav')

@section('content')

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                  <div class="row">
        <center>
            <img class="img img-responsive" src="/img/create.png" alt=""
            width="100px">
        </center>
        <center>
            <br>
            <a href="">
                <p class="font-size-parti">ADD TO NEW ENTERPRISE</p>
            </a>
        </center>
    </div>
    <form  method="POST" action="./invite">
    {{ csrf_field() }}
        <div class="form-group">
            <label style="color:#b5b5b5;font-size:13px;"for="exampleInputEmail1">Enterprise name</label>
            <input type="email" name="enterprise" value="{{ old('enterprise') }}" required autofocus class="form-control" id="exampleInputEmail1" placeholder="Enterprise">
              @if ($errors->has('enterprise'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('enterprise') }}</strong>
                                    </span>
                                @endif
        </div>
      
        <center>
                 <button type="submit" class="padbtn btn btn-default">
                                 Envoyé
                                </button>
        </center>
    </form>

    </p>
      
@endsection




@extends('template.footer')



