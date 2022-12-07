<x-layout_auth>

    <div class="row">
        <div class="col-md-4 mx-auto mt-5">
            <div class="text-center mt-5 mb-4">
                <img src="{{ asset('images/instragram.png') }}" alt="" width="180" height="60">
            </div>
            <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary w-100">Log in</button>
              </form>
        </div>
    </div>

</x-layout_auth>