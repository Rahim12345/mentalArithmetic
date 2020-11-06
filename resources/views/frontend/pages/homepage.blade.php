@extends('frontend.layout.app')

@section('title')
    Əsas səhifə
@endsection

@section('css')

@endsection

@section('content')
    <div class="row" style="margin-top: 10px;" {{$darker}}>
        <div class="col-sm-4">
            <div class="card" style="min-height: 222px;">
                <div class="card-body" {{$darker}}>
                    <h5 class="card-title">Vurma cədvəli</h5>
                    <p class="card-text">Burada vurma cədvəlinə aid suallar etməklə vurmanı daha mükəmməl biləcəksiniz</p>
                    <a href="{{route('multiplicationStart')}}" class="btn btn-primary" style="position: absolute;bottom: 0px;right: 0px; ">Başla</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body" style="min-height: 222px;" {{$darker}}>
                    <h5 class="card-title">Toplama</h5>
                    <p class="card-text">Burada siz 100 dairəsində toplama sualları həll etməklə yazılı və şifahi hesablama bacarıqları əldə edəcəksiniz</p>
                    <a href="{{route('additionStart')}}" class="btn btn-primary" style="position: absolute;bottom: 0px;right: 0px; ">Başla</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body" style="min-height: 222px;" {{$darker}}>
                    <h5 class="card-title">Çıxma</h5>
                    <p class="card-text">Burada siz 100 dairəsində çıxma sualları həll etməklə yazılı və şifahi hesablama bacarıqları əldə edəcəksiniz</p>
                    <a href="{{route('minusStart')}}" class="btn btn-primary" style="position: absolute;bottom: 0px;right: 0px; ">Başla</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
