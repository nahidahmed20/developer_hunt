@extends('admin.master')


@section('content')

	  
      <!-- Main Content -->
      <div class="main-content ">
        <section class="section ">
          <div class="section-body ">
            <div class="row ">
              <div class="col-12 col-md-6 col-lg-10 mx-auto">
                <div class="text-primary"> {{session('success')}}</div>
                <div class="card">
                  <div class="card-header ">
                    <h4 >New Service Adding</h4>
                  </div>
                  <div class="card-body">
                    
                    
                    <form class="form-horizontal" method="POST" action="{{route('service.store')}}" enctype="multipart/form-data">
                      @csrf
                        <div class="form-group">
                          <label  class="form-text">Title</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Enter Your Title" name="title">
                        </div>
                        <div class="form-group">
                            <label  class="form-text">Image</label>
                            <input type="file" class="form-control" id="inputPassword3" name="image">
                          </div>
                        <div class="form-group">
                          <label  class="form-text">Short Description</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Short Description" name="short_description">
                        </div>
                        <div class="form-group">
                            <label  class="form-text">Long Description</label>
                            <textarea id="summernote" name="long_description"></textarea>
                        </div>
                        <div class="form-group">
                          <label  class="form-text">Status</label>
                          <div >
                            <label><input type="radio" name="status" value="1" checked> Published</label>
                            <label><input type="radio" name="status" value="0"> Unpublished</label>
                        </div>
                        </div>
                        
                        <div class="form-group mt-3">
                            <div>
                                <button type="submit" class="btn btn-primary">Add Service</button>
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