@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-3 p-1"><img src="/image/avatar.png" alt="" class="w-50 rounded-circle ml-5"></div>
        <div class="col-9">
            <div class="pt-3 d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/posts/create" class="">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-3"> <strong>153</strong> posts</div>
                <div class="pr-3"> <strong>23k</strong> followers</div>
                <div class="pr-3"> <strong>212k</strong> followeing</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title}}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="https://{{ $user->profile->url    }}">{{ $user->profile->url    }}</a></div>

            </div>
            <div class="row pt-3">

                @forelse($user->posts as $post)
                <div class="col-md-4">
                    <img src="/storage/{{$post->image}}" alt="" class="w-100 p-2">
                <h4 class="d-flex justify-content-center align-items-center ">{{$post->caption}}</h4>
                </div>
                @empty

            </div>
        </div>
                <div class="d-flex justify-content-center mt-5">
                    <h3 class="d-flex justify-content-center align-items-center bg-success alert w-50">There is no post to see.</h3>
                </div>



                @endforelse


            </div>
    </div>

</div>
@endsection
