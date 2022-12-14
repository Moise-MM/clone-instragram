<x-layout>

    <div class="row">
        <div class="col-md-6 mx-auto mt-2">
            <h1 class="my-3">Edit profile</h1>
            <hr>
            <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="font-weight-bold">Email</label>
                            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror border px-2" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') ?? $user->email }}">
                            @error('email')
                              <div class="invalid-feedback">
                                  {{ $errors->first('email') }}
                              </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="font-weight-bold">Full name</label>
                            <input name="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror border px-2" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{ old('fullname') ?? $user->fullname }}">
                            @error('fullname')
                            <div class="invalid-feedback">
                                {{ $errors->first('fullname') }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="font-weight-bold">Username</label>
                            <input name="username" type="text" class="form-control @error('username') is-invalid @enderror border px-2" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{ old('username') ?? $user->username }}">
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $errors->first('username') }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="font-weight-bold">Url</label>
                            <input name="url" type="text" class="form-control @error('url') is-invalid @enderror border px-2" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{ old('url') ? old('url') : $user->profile->url ?? "" }}">
                            @error('url')
                            <div class="invalid-feedback">
                                {{ $errors->first('url') }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="description" class="font-weight-bold">Description</label>
                            <textarea name="description" type="text" class="form-control @error('description') is-invalid @enderror border px-2" id="description" aria-describedby="emailHelp" id="" rows="10">
                                {{ old('description') ? old('description') : $user->profile->description ?? "" }}
                            </textarea>
                            @error('description')
                            <div class="invalid-feedback">
                                {{ $errors->first('description') }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input name="image" type="file" class="border px-3 form-control @error('image') is-invalid @enderror" id="image" aria-describedby="image">
                            @error('image')
                            <div class="invalid-feedback">
                                {{ $errors->first('image') }}
                            </div>
                            @enderror
                          </div>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary w-100">Save</button>
              </form>
        </div>
    </div>

</x-layout>