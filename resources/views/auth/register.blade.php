@extends('template.head')
@extends('template.nav')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    @if (session('confirmation-success'))
                        <div class="alert alert-success">
                            {{ session('confirmation-success') }}
                        </div>
                    @else
                    <div class="row">
                    <center>
                        <img class="img img-responsive" src="/img/create.png" alt=""
                        width="100px">
                    </center>
                    <center>
                        <br>
                        <a href="">
                            <p class="font-size-parti">ADD YOUR PICTURE</p>
                        </a>
                    </center>
                </div>
                <form  method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
              
                    <div class="form-group">
                        <label style="color:#b5b5b5;font-size:13px;"for="exampleInputEmail1">First name</label>
                        <input type="text" name="name" value="{{ old('name') }}" required autofocus class="form-control" id="" placeholder="Fname">
                          @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                    </div>
                    <div class="form-group">
                        <label style="color:#b5b5b5; font-size:13px;">Last name</label>
                        <input name="Lname" type="text" class="form-control" placeholder="Last Name">
                         @if ($errors->has('Lname'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('Lname') }}</strong>
                                                </span>
                                            @endif
                    </div>
                    <div class="form-group">
                        <label style="color:#b5b5b5; font-size:13px;" for="exampleInputEmail1">Email </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" required> 
                        
                            <!-- @if(isset($email))
                                value = "{{$email}}"
                            @else
                                value="{{ old('email') }}"
                            @endif -->
                        
                         
                        
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                    </div>
                    <div class="form-group">
                        <label style="color:#b5b5b5; font-size:13px;"for="exampleInputPassword1">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                             @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                    </div>
                    <div class="form-group">
                        <label style="color:#b5b5b5; font-size:13px;"for="exampleInputPassword1">Confirm Password</label>
                        <input name="password_confirmation" required type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            
                    </div>
                    <center>
                             <button type="submit" class="padbtn btn btn-default">
                                               Validate
                                            </button>
                    </center>
                </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('template.footer')