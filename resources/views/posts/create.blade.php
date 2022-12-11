<x-layout>
    
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4 mx-auto mt-5">
                <h1 class="h3">Create new post</h1>
                <hr>
                <form action=" " method="POST" class="my-4">
                    @csrf
                    <div class="form-group">
                      <label for="image">Image</label>
                      <input name="image" type="file" class="border px-3 form-control @error('image') is-invalid @enderror" id="image" aria-describedby="image">
                      @error('image')
                      <div class="invalid-feedback">
                          {{ $errors->first('image') }}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="caption">Caption</label>
                      <textarea name="caption" id="caption" class="form-control @error('caption') is-invalid @enderror border">
                        {{ old('caption') }}
                      </textarea>
                      @error('image')
                      <div class="invalid-feedback">
                          {{ $errors->first('image') }}
                      </div>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Add new post</button>
                  </form>
            </div>
        </div>
    </div>


</x-layout>