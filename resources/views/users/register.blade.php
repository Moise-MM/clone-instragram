<x-layout>

    <div class="row">
        <div class="col-md-4 mx-auto mt-2">
            <div class="text-center mt-5 mb-4">
                <img src="{{ asset('images/instragram.png') }}" alt="" width="180" height="60">
                <p>Sign up to see photos and videos from your friends.</p>
            </div>
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input name="email" type="email" class="form-control @error('email') is-invalid @enderror border px-2" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}">
                  @error('email')
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Full name</label>
                    <input name="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror border px-2" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{ old('fullname') }}">
                    @error('fullname')
                    <div class="invalid-feedback">
                        {{ $errors->first('fullname') }}
                    </div>
                    @enderror
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input name="username" type="text" class="form-control @error('username') is-invalid @enderror border px-2" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{ old('username') }}">
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $errors->first('username') }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input name="password" type="password" class="form-control @error('password') is-invalid @enderror border px-2" id="exampleInputPassword1"  value="{{ old('password') }}">
                  @error('password')
                  <div class="invalid-feedback">
                      {{ $errors->first('password') }}
                  </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100">Sign up</button>
              </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4  mx-auto mt-3">
            <p>Have an account? <a href="{{ route('login') }}">Log in</a> </p>
        </div>
    </div>

</x-layout>