<x-layout>

    <div class="row mt-3">
        <div class="col-12 col-md-3 p-md-2 p-0 ml-3 ml-md-0 d-md-flex justify-content-md-center align-items-md-center">
            <img src="{{ asset('images/profile.png') }}" alt="" class="rounded-circle" width="130" height="130">
        </div>
        <div class="col-12 col-md-6 pt-md-5 pt-0 mt-4 mt-md-0">
            <div class="d-flex justify-content-between">
                <h1>{{ $user->username }}</h1>
                <a href="" class="btn btn-outline-primary text-capitalize btn-xs">Edit profile</a>
            </div>
            <div class="d-flex">
                <div class="pr-4"><strong class="mr-1">200</strong>posts</div>
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
    <div class="row pt-3">
        <div class="col-md-4">
            <img src="https://images.pexels.com/photos/14612160/pexels-photo-14612160.jpeg" alt="" class="w-100" height="80%">
        </div>
        <div class="col-md-4">
            <img src="https://images.pexels.com/photos/1213516/pexels-photo-1213516.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="w-100" height="80%">
        </div>
        <div class="col-md-4">
            <img src="https://images.pexels.com/photos/14683121/pexels-photo-14683121.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="w-100" height="80%">
        </div>
    </div>

</x-layout>