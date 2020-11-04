@extends('frontend.layout.app')

@section('title')
Vurma cədvəli
@endsection

@section('css')

@endsection

@section('content')
<form action="{{route('multiplication.post')}}" method="post">
    @csrf
    @foreach($questions as $question)
        <div class="card">
            <div class="card-body">
                <div class="row">Sual :{{$loop->iteration}}) {!! $question->question !!}</div>
                <div class="row">
                <!-- Default checked -->
                    <div class="custom-control custom-radio">
                        <input value="{!! $question->A !!}" type="radio" name="sual_{{$loop->iteration}}" class="custom-control-input" id="sual_{{$loop->iteration}}_ida">
                        <label class="custom-control-label" for="sual_{{$loop->iteration}}_ida">A){!! $question->A !!}</label>
                    </div>
                    <hr>
                    <div class="custom-control custom-radio">
                        <input value="{!! $question->B !!}" type="radio" name="sual_{{$loop->iteration}}" class="custom-control-input" id="sual_{{$loop->iteration}}_idb">
                        <label class="custom-control-label" for="sual_{{$loop->iteration}}_idb">B){!! $question->B !!}</label>
                    </div>
                    <hr>
                    <div class="custom-control custom-radio">
                        <input value="{!! $question->C !!}" type="radio" name="sual_{{$loop->iteration}}" class="custom-control-input" id="sual_{{$loop->iteration}}_idc">
                        <label class="custom-control-label" for="sual_{{$loop->iteration}}_idc">C){!! $question->C !!}</label>
                    </div>
                    <hr>
                    <div class="custom-control custom-radio">
                        <input value="{!! $question->D !!}" type="radio" name="sual_{{$loop->iteration}}" class="custom-control-input" id="sual_{{$loop->iteration}}_idd">
                        <label class="custom-control-label" for="sual_{{$loop->iteration}}_idd">D){!! $question->D !!}</label>
                    </div>
                    <hr>
                    <div class="custom-control custom-radio">
                        <input value="{!! $question->E !!}" type="radio" name="sual_{{$loop->iteration}}" class="custom-control-input" id="sual_{{$loop->iteration}}_ide">
                        <label class="custom-control-label" for="sual_{{$loop->iteration}}_ide">E){!! $question->E !!}</label>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
        <br>
    <button class="btn btn-primary form-control">Yoxla</button>
</form>
@endsection

@section('js')

@endsection
