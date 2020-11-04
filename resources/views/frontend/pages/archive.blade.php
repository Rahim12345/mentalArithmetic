@extends('frontend.layout.app')

@section('title')
Arxiv
@endsection

@section('css')

@endsection

@section('content')
    <table class="table table-striped table-dark">
        <thead class="thead-dark">
        <tr>
            <th>№</th>
            <th>Mövzu</th>
            <th>Tarix</th>
            <th>Gözdən keçir</th>
        </tr>
        </thead>
        <tbody>
        @isset($noData)
            <tr>
                <td colspan="4">{{$noData}}</td>
            </tr>
        @else
            @foreach($archives as $archive)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$archive->getTopicName->name}}</td>
                    <td>{{$archive->updated_at->diffForHumans()}}</td>
                    <td><a href="{{route('archiveMore',[str_slug($archive->getUserName->name_lastname),$archive->id])}}" class="btn btn-info">Kliklə</a></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

@endsection

@section('js')

@endsection
