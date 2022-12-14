<x-layout>
    
    <div class="container">
        
        <div class="row mt-3">
            <div class="col-md-8">
                <img src="{{ asset('storage').'/'.$post->image }}" alt="" class="w-100">
            </div>
            <div class="col-md-4">
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                         <img src="{{ $post->user->profile->image ? asset('storage').'/'.$post->user->profile->image : asset('images/profile.jpg') }}" alt="" class="w-100 rounded-circle" style="max-width: 50px">
                    </div>
                    <div>
                        <a href="{{ route('profile.index', $post->user->id) }}" class="font-weight-bold" style="color: black">{{ $post->user->username }}</a>
                        <a href="" class="pl-3">Follow</a>
                    </div>
                </div>
                <hr> 

                <p>{{ $post->caption }}</p>
            </div>
        </div>

    </div>


</x-layout>