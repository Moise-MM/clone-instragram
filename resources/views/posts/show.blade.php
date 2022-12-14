<x-layout>
    
    <div class="container">
        
        <div class="row">
            <div class="col-md-8">
                <img src="{{ asset('storage').'/'.$post->image }}" alt="" class="w-100">
            </div>
            <div class="col-md-4">
                <h3>{{ $post->user->username }}</h3>

                <p>{{ $post->caption }}</p>
            </div>
        </div>

    </div>


</x-layout>