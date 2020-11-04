@extends('frontend.layout.app')

@section('title')
    Əsas səhifə
@endsection

@section('css')

@endsection

@section('content')
    <div class="row" style="margin-top: 10px;">
        <div class="col-sm-4">
            <div class="card" style="min-height: 222px;">
                <div class="card-body">
                    <h5 class="card-title">Vurma cədvəli</h5>
                    <p class="card-text">Burda vurma cədvəlinə aid suallar etməklə vurmanı daha mükəmməl biləcəksiniz</p>
                    <a href="{{route('multiplicationStart')}}" class="btn btn-primary" style="position: absolute;bottom: 0px;right: 0px; ">Başla</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body" style="min-height: 222px;">
                    <h5 class="card-title">Toplama</h5>
                    <p class="card-text">Burda siz 100 dairəsində suallar həll etməklə yazılı və şifahi hesablama bacarıqları əldə edəcəksiniz</p>
                    <a href="#" class="btn btn-primary" style="position: absolute;bottom: 0px;right: 0px; ">Başla</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body" style="min-height: 222px;">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary" style="position: absolute;bottom: 0px;right: 0px; ">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
