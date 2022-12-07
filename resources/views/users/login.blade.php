<x-layout_auth>

    <div class="row">
        <div class="col-md-4 mx-auto mt-5">
            <div class="text-center mt-5 mb-4">
                <img src="{{ asset('images/instragram.png') }}" alt="" width="180" height="60">
            </div>
            <form action="{{ route('user.auth') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('email')
                  <div class="invalid-feedback">
                      {{ $errors->first('email') }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"" id="exampleInputPassword1">
                  @error('email')
                  <div class="invalid-feedback">
                      {{ $errors->first('password') }}
                  </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100">Log in</button>
              </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4  mx-auto mt-3">
            <p>Don't have an account? <a href="{{ route('user.register') }}">Sing up</a> </p>
        </div>
    </div>

</x-layout_auth>