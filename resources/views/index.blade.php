@extends('layout')

@section('content')



    <div class="text-right">
        <a href="{{ route('create') }}" class="btn btn-outline-secondary btn-sm mt-4">筆記製作</a>
    </div>

    <div class="container">
        <div class="row">

            @foreach ($memos as $memo)
            <div class="col-md-4 text-left mt-4">

            <div class="card">

                <div class="card-body">
                <p class="text-black-50"> {{ $memo->content }} </p>
                </div>

                <div class="card-footer text-right">
                <a href="{{ route('edit', ['id'=>$memo->id])}}"class="btn btn-outline-info btn-sm" class="text-info">編輯</a>
                <a href="{{ route('delete', ['id'=>$memo->id])}}" class="btn btn-outline-info btn-sm"class="text-info">刪除</a>
                </div>

            </div>

            </div>
            @endforeach

        </div>
    </div>

@endsection