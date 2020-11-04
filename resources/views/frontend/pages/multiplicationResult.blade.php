@extends('frontend.layout.app')

@section('title')
Vurma cədvəli
@endsection

@section('css')

@endsection

@section('content')
    @foreach($questions as $question)
        @if($studentAnswers[$loop->index] !='' )
            @if($studentAnswers[$loop->index] == $rightanswers[$loop->index])
                <div class="card">
                    <div class="card-body">
                        <div class="row">Sual :{{$loop->iteration}}) {!! $question->question !!}</div>
                        <div class="row">
                            <!-- Default checked -->
                            <div class="custom-control custom-radio">
                                <input value="{!! $question->A !!}" type="radio" name="sual_{{$loop->iteration}}" class="custom-control-input" id="sual_{{$loop->iteration}}_ida" {{$studentAnswers[$loop->index] == $question->A ? 'checked' : ''}} disabled>
                                <label style="{{$studentAnswers[$loop->index] == $rightanswers[$loop->index] &&  $rightanswers[$loop->index] == $question->A? 'color:green;font-weight:bold;font-style:italic' : ''}}" class="custom-control-label" for="sual_{{$loop->iteration}}_ida">A){!! $question->A !!}</label>
                            </div>
                            <hr>
                            <div class="custom-control custom-radio">
                                <input value="{!! $question->B !!}" type="radio" name="sual_{{$loop->iteration}}" class="custom-control-input" id="sual_{{$loop->iteration}}_idb" {{$studentAnswers[$loop->index] == $question->B ? 'checked' : ''}} disabled>
                                <label style="{{$studentAnswers[$loop->index] == $rightanswers[$loop->index] &&  $rightanswers[$loop->index] == $question->B? 'color:green;font-weight:bold;font-style:italic' : ''}}" class="custom-control-label" for="sual_{{$loop->iteration}}_idb">B){!! $question->B !!}</label>
                            </div>
                            <hr>
                            <div class="custom-control custom-radio">
                                <input value="{!! $question->C !!}" type="radio" name="sual_{{$loop->iteration}}" class="custom-control-input" id="sual_{{$loop->iteration}}_idc" {{$studentAnswers[$loop->index] == $question->C ? 'checked' : ''}} disabled>
                                <label style="{{$studentAnswers[$loop->index] == $rightanswers[$loop->index] &&  $rightanswers[$loop->index] == $question->C? 'color:green;font-weight:bold;font-style:italic' : ''}}" class="custom-control-label" for="sual_{{$loop->iteration}}_idc">C){!! $question->C !!}</label>
                            </div>
                            <hr>
                            <div class="custom-control custom-radio">
                                <input value="{!! $question->D !!}" type="radio" name="sual_{{$loop->iteration}}" class="custom-control-input" id="sual_{{$loop->iteration}}_idd" {{$studentAnswers[$loop->index] == $question->D ? 'checked' : ''}} disabled>
                                <label style="{{$studentAnswers[$loop->index] == $rightanswers[$loop->index] &&  $rightanswers[$loop->index] == $question->D? 'color:green;font-weight:bold;font-style:italic' : ''}}" class="custom-control-label" for="sual_{{$loop->iteration}}_idd">D){!! $question->D !!}</label>
                            </div>
                            <hr>
                            <div class="custom-control custom-radio">
                                <input value="{!! $question->E !!}" type="radio" name="sual_{{$loop->iteration}}" class="custom-control-input" id="sual_{{$loop->iteration}}_ide" {{$studentAnswers[$loop->index] == $question->E ? 'checked' : ''}} disabled>
                                <label style="{{$studentAnswers[$loop->index] == $rightanswers[$loop->index] &&  $rightanswers[$loop->index] == $question->E? 'color:green;font-weight:bold;font-style:italic' : ''}}" class="custom-control-label" for="sual_{{$loop->iteration}}_ide">E){!! $question->E !!}</label>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="card">
                    <div class="card-body">
                        <div class="row">Sual :{{$loop->iteration}}) {!! $question->question !!}</div>
                        <div class="row">
                            <!-- Default checked -->
                            <div class="custom-control custom-radio">
                                <input value="{!! $question->A !!}" type="radio" name="sual_{{$loop->iteration}}" class="custom-control-input" id="sual_{{$loop->iteration}}_ida" {{$studentAnswers[$loop->index] == $question->A ? 'checked' : ''}} disabled>
                                <label style="{{$rightanswers[$loop->index] == $question->A? 'color:green;font-weight:bold;font-style:italic' : ''}}" class="custom-control-label" for="sual_{{$loop->iteration}}_ida">A){!! $question->A !!}</label>
                            </div>
                            <hr>
                            <div class="custom-control custom-radio">
                                <input value="{!! $question->B !!}" type="radio" name="sual_{{$loop->iteration}}" class="custom-control-input" id="sual_{{$loop->iteration}}_idb" {{$studentAnswers[$loop->index] == $question->B ? 'checked' : ''}} disabled>
                                <label style="{{$rightanswers[$loop->index] == $question->B? 'color:green;font-weight:bold;font-style:italic' : ''}}" class="custom-control-label" for="sual_{{$loop->iteration}}_idb">B){!! $question->B !!}</label>
                            </div>
                            <hr>
                            <div class="custom-control custom-radio">
                                <input value="{!! $question->C !!}" type="radio" name="sual_{{$loop->iteration}}" class="custom-control-input" id="sual_{{$loop->iteration}}_idc" {{$studentAnswers[$loop->index] == $question->C ? 'checked' : ''}} disabled>
                                <label style="{{$rightanswers[$loop->index] == $question->C? 'color:green;font-weight:bold;font-style:italic' : ''}}" class="custom-control-label" for="sual_{{$loop->iteration}}_idc">C){!! $question->C !!}</label>
                            </div>
                            <hr>
                            <div class="custom-control custom-radio">
                                <input value="{!! $question->D !!}" type="radio" name="sual_{{$loop->iteration}}" class="custom-control-input" id="sual_{{$loop->iteration}}_idd" {{$studentAnswers[$loop->index] == $question->D ? 'checked' : ''}} disabled>
                                <label style="{{$rightanswers[$loop->index] == $question->D? 'color:green;font-weight:bold;font-style:italic' : ''}}" class="custom-control-label" for="sual_{{$loop->iteration}}_idd">D){!! $question->D !!}</label>
                            </div>
                            <hr>
                            <div class="custom-control custom-radio">
                                <input value="{!! $question->E !!}" type="radio" name="sual_{{$loop->iteration}}" class="custom-control-input" id="sual_{{$loop->iteration}}_ide" {{$studentAnswers[$loop->index] == $question->E ? 'checked' : ''}} disabled>
                                <label style="{{$rightanswers[$loop->index] == $question->E? 'color:green;font-weight:bold;font-style:italic' : ''}}" class="custom-control-label" for="sual_{{$loop->iteration}}_ide">E){!! $question->E !!}</label>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @else
            <div class="card">
                <div class="card-body">
                    <div class="row">Sual :{{$loop->iteration}}) {!! $question->question !!}</div>
                    <div class="row">
                        <!-- Default checked -->
                        <div class="custom-control custom-radio">
                            <input value="{!! $question->A !!}" type="radio" name="sual_{{$loop->iteration}}" class="custom-control-input" id="sual_{{$loop->iteration}}_ida" disabled>
                            <label style="{{$rightanswers[$loop->index] == $question->A? 'color:green;font-weight:bold;font-style:italic' : ''}}" class="custom-control-label" for="sual_{{$loop->iteration}}_ida">A){!! $question->A !!}</label>
                        </div>
                        <hr>
                        <div class="custom-control custom-radio">
                            <input value="{!! $question->B !!}" type="radio" name="sual_{{$loop->iteration}}" class="custom-control-input" id="sual_{{$loop->iteration}}_idb" disabled>
                            <label style="{{$rightanswers[$loop->index] == $question->B? 'color:green;font-weight:bold;font-style:italic' : ''}}" class="custom-control-label" for="sual_{{$loop->iteration}}_idb">B){!! $question->B !!}</label>
                        </div>
                        <hr>
                        <div class="custom-control custom-radio">
                            <input value="{!! $question->C !!}" type="radio" name="sual_{{$loop->iteration}}" class="custom-control-input" id="sual_{{$loop->iteration}}_idc" disabled>
                            <label style="{{$rightanswers[$loop->index] == $question->C? 'color:green;font-weight:bold;font-style:italic' : ''}}" class="custom-control-label" for="sual_{{$loop->iteration}}_idc">C){!! $question->C !!}</label>
                        </div>
                        <hr>
                        <div class="custom-control custom-radio">
                            <input value="{!! $question->D !!}" type="radio" name="sual_{{$loop->iteration}}" class="custom-control-input" id="sual_{{$loop->iteration}}_idd" disabled>
                            <label style="{{$rightanswers[$loop->index] == $question->D? 'color:green;font-weight:bold;font-style:italic' : ''}}" class="custom-control-label" for="sual_{{$loop->iteration}}_idd">D){!! $question->D !!}</label>
                        </div>
                        <hr>
                        <div class="custom-control custom-radio">
                            <input value="{!! $question->E !!}" type="radio" name="sual_{{$loop->iteration}}" class="custom-control-input" id="sual_{{$loop->iteration}}_ide" disabled>
                            <label style="{{$rightanswers[$loop->index] == $question->E? 'color:green;font-weight:bold;font-style:italic' : ''}}" class="custom-control-label" for="sual_{{$loop->iteration}}_ide">E){!! $question->E !!}</label>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    @endforeach
    <table class="table table-striped table-dark">
        <thead class="thead-dark">
            <tr>
                <th>Düz</th>
                <th>Səhv</th>
                <th>Yazılmayıb</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$right}}</td>
            <td>{{$mistake}}</td>
            <td>{{$nowritten}}</td>
        </tr>
        </tbody>
    </table>
@endsection

@section('js')

@endsection
