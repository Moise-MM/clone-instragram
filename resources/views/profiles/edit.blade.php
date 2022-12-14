<x-layout>

    <div class="row mt-5">
        <div class="col-md-4 mx-auto mt-5">
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1" class="font-weight-bold">Email</label>
                  <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') ?? $user->email }}">
                  @error('email')
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="font-weight-bold">Full name</label>
                    <input name="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{ old('fullname') ?? $user->fullname }}">
                    @error('fullname')
                    <div class="invalid-feedback">
                        {{ $errors->first('fullname') }}
                    </div>
                    @enderror
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1" class="font-weight-bold">Username</label>
                    <input name="username" type="text" class="form-control @error('username') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{ old('username') ?? $user->username }}">
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $errors->first('username') }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100">Save</button>
              </form>
        </div>
    </div>

</x-layout>