@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                        @foreach($post as $post)
                            <div class="card">
                                <div class="card-header">
                                    <h3>
                                        <a href="/posts/{{$post->id}}"> {{$post->title}} </a>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <p> {{$post->body}} </p>
                                </div>
                                <div class="card-footer">
                                    <p class="card-text"> Published on {{$post->created_at}} </p>
                                </div>
                            </div>
                            <br>
                        @endforeach



                <!--</div>
            </div>-->
        </div>
    </div>
</div>
@endsection
