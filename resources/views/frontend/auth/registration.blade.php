@extends('frontend.auth.layout.app')

@section('title')
    Qeydiyyatdan keç
@endsection

@section('css')

@endsection

@section('content')
    <div class="container col-sm-10 col-md-8 col-xl-4 mx-auto" style="margin-top: 150px;">
        <div class="card">
            <h3 class="card-header">Qeydiyyatdan keç</h3>
            <div class="card-block">
                <form action="{{route('post.registration')}}" method="post">
                    @csrf
                    <div class="form-group @if($errors->first('name_lastname')) has-danger @endif">
                        <div class="col-sm-12">
                            <input value="{{old('name_lastname')}}" type="text" name="name_lastname" class="form-control @if($errors->first('name_lastname')) form-control-danger @endif" placeholder="Ad Soyad">
                            @if($errors->first('name_lastname'))
                            <div class="form-control-feedback">
                                {{$errors->first('name_lastname')}}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group @if($errors->first('email')) has-danger @endif">
                        <div class="col-sm-12">
                            <input value="{{old('email')}}" type="email" name="email" class="form-control @if($errors->first('email')) form-control-danger @endif" placeholder="Email">
                            @if($errors->first('email'))
                                <div class="form-control-feedback">
                                    {{$errors->first('email')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group @if($errors->first('password')) has-danger @endif">
                        <div class="col-sm-12">
                            <input type="password" name="password" class="form-control @if($errors->first('password')) form-control-danger @endif" placeholder="Şifrə">
                            @if($errors->first('password'))
                                <div class="form-control-feedback">
                                    {{$errors->first('password')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group @if($errors->first('password_confirmation')) has-danger @endif">
                        <div class="col-sm-12">
                            <input type="password" name="password_confirmation" class="form-control @if($errors->first('password_confirmation')) form-control-danger @endif" placeholder="Şifrə(təkrar)">
                            @if($errors->first('password_confirmation'))
                                <div class="form-control-feedback">
                                    {{$errors->first('password_confirmation')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <a href="{{route('login')}}">Daxil ol</a>
                            <button type="submit" class="btn btn-primary float-right">Qeydiyyat</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
