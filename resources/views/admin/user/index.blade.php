@extends('admin.master')

@section('content')

  
	  
      <!-- Main Content -->
      <div class="main-content ">
        <section class="section ">
          <div class="section-body ">
            <div class="row ">
              <div class="col-12 col-md-6 col-lg-10 mx-auto">
                <div class="card">
                  <div class="card-header ">
                    <h4 >Add User</h4>
                  </div>
                  <div class="card-body">
                    <div class="text-primary"></div>
                    
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                      @csrf

                      <div class="mb-3">
                          <label for="name">Name</label>
                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>

                      <div class="mb-3">
                          <label for="email">Email</label>
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>

                      <div class="mb-3">
                          <label for="userpassword">Password</label>
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>

                      <div class="mb-3">
                          <label for="confirmpassword">Confirm Password</label>
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                      </div>

                      <div class="mb-3 row mt-4">
                          <div class="col-12 text-end">
                              <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Register</button>
                          </div>
                      </div>

                      <div class="mb-0 row">
                          <div class="col-12 mt-4">
                              <p class="text-muted mb-0 font-size-14">By registering you agree to the Lexa <a href="#" class="text-primary">Terms of Use</a></p>
                          </div>
                      </div>
                  </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
       
      </div>
	  
	  
	  
	  

@endsection