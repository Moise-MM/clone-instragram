<x-layout_auth>

    <div class="row">
        <div class="col-md-4 mx-auto mt-4">
            <div class="text-center mt-5 mb-4">
                <img src="{{ asset('images/instragram.png') }}" alt="" width="180" height="60">
                <p>Sign up to see photos and videos from your friends.</p>
            </div>
            <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Full name</label>
                    <input name="fullname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary w-100">Sign up</button>
              </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4  mx-auto mt-3">
            <p>Have an account? <a href="{{ route('user.login') }}">Log in</a> </p>
        </div>
    </div>

</x-layout_auth>