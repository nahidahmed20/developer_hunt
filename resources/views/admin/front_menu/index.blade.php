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
                    <h4 >New User Adding</h4>
                  </div>
                  <div class="card-body">
                    <div class="text-primary"></div>
                    
                    <form class="form-horizontal" method="POST" action="{{route('front-menu.store')}}" enctype="multipart/form-data">
                      @csrf
                        <div class="form-group">
                          <label  class="form-text">Location</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Enter Your Name" name="location">
                        </div>
                        <div class="form-group">
                          <label  class="form-text">Number</label>
                            <input type="number" class="form-control" id="inputName" placeholder="Enter Your Name" name="number">
                        </div>
                        <div class="form-group">
                          <label  class="form-text">Gmail</label>
                            <input type="email" class="form-control" id="inputName" placeholder="Enter Your Name" name="gmail">
                        </div>
                        <div class="form-group">
                          <label  class="form-text">Logo</label>
                          <input type="file" class="form-control" id="inputPassword3" name="logo">
                        </div>
                        <div class="form-group">
                          <label  class="form-text">Image</label>
                          <input type="file" class="form-control" id="inputPassword3" name="image">
                        </div>
                        <div class="form-group">
                          <label  class="form-text">Description</label>
                          <textarea id="summernote" name="description"></textarea>
                        </div>
                        
                        <div class="form-group mt-3">
                            <div>
                                <button type="submit" class="btn btn-primary">Add Front</button>
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