<x-layout>

    <div class="row mt-3">
        <div class="col-12 col-md-3 p-md-2 p-0 ml-3 ml-md-0 d-md-flex justify-content-md-center align-items-md-center">
            <img src="{{ asset('images/profile.jpg') }}" alt="" class="rounded-circle" width="130" height="130">
        </div>
        <div class="col-12 col-md-6 pt-md-5 pt-0 mt-4 mt-md-0">
            <div class="d-flex justify-content-between">
                <h1>{{ $user->username }}</h1>
                
                @can('update', $user->profile)
                <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-outline-primary text-capitalize btn-xs">Edit profile</a>
                @endcan
            </div>
            <div class="d-flex">
                <div class="pr-4"><strong class="mr-1">{{ $user->posts->count() }}</strong>posts</div>
                <div class="pr-4"><strong class="mr-1">30k</strong>followers</div>
                <div class="pr-4"><strong class="mr-1">100</strong>following</div>
            </div>
            <div class="pt-4 font-weight-bold" style="font-size:1.5rem">
               {{ $user->fullname }}
            </div>
            <div>
                {{ $user->profile->description ?? " " }}
            </div>
            <div>
                <a href="{{ $user->profile->url ?? "" }}">{{ $user->profile->url ?? "N/A" }}</a>
            </div>
        </div>
    </div>
    <hr>
    <div class="row text-center text-secondary">
        <div class="col" style="font-size: 1rem">
            <i class="fas fa-grip-vertical"></i> Posts
        </div>
    </div>
    <div class="row pt-md-3 pt-3">
        @foreach ($user->posts as $post )
            <div class="col-md-4 ">
                <a href="{{ route('post.show', $post->id) }}"><img src="{{ asset('storage').'/'.$post->image }}" alt="" class="w-100 pb-3"></a>
            </div>
        @endforeach
        
    </div>

</x-layout>