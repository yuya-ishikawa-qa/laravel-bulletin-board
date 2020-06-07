@extends('layout')

@section('content')
    <div class="container mt-4">
        <div >
            <a class="btn btn-primary" href="{{route('posts.create')}}">
                投稿の新規作成
            </a>
        </div>
    </div>

    <div class="container my-4">
        @foreach ($posts as $post)
            <div class="card mb-4">
                <div class="card-header">
                    <h2>
                        {{$post->title}}
                    </h2>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        {{$post->body}}
                    </p>

                    <a class="card-link" href="{{route('posts.show',['post_id'=>$post->id])}}">
                        詳細を見る
                    </a>
                </div>
                <div class="card-footer">
                    <span>
                        投稿日時：{{$post->created_at->format('Y-m-d')}}
                    </span>
                </div>
            </div>
        @endforeach

        <div class="d-flex justify-content-center mb-5">
            {{$posts->links()}}
        </div>
    </div>
@endsection('content')