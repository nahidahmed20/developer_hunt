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
                    <h4 >Graphics Design Adding</h4>
                  </div>
                  <div class="card-body">
                    <div class="text-primary">{{session('message')}}</div>

                    <form class="form-horizontal" method="POST" action="{{route('front-menu.update',$single_fornt_menu->id)}}" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                        <div class="form-group">
                          <label  class="form-text">Location</label>
                            <input type="text" class="form-control" value="{{$single_fornt_menu->location}}" id="inputName" placeholder="Enter Your Name" name="location">
                        </div>
                        <div class="form-group">
                          <label  class="form-text">Number</label>
                            <input type="number" class="form-control" value="{{$single_fornt_menu->number}}" id="inputName" placeholder="Enter Your Name" name="number">
                        </div>
                        <div class="form-group">
                          <label  class="form-text">Gmail</label>
                            <input type="email" class="form-control" value="{{$single_fornt_menu->gmail}}" id="inputName" placeholder="Enter Your Name" name="gmail">
                        </div>
                        <div class="form-group">
                          <label class="form-text">Logo</label>
                          <input type="file" class="form-control" id="logoInput" name="logo">
                          <img src="{{ asset('storage/logos/'.$single_fornt_menu->logo) }}" alt="Logo" height="80" width="120">
                      </div>
                      <div class="form-group">
                          <label class="form-text">Image</label>
                          <input type="file" class="form-control" id="imageInput" name="image">
                          <img src="{{ asset('storage/images/'.$single_fornt_menu->image) }}" alt="Image" height="80" width="120">
                      </div>
                                              
                        <div class="form-group">
                          <label  class="form-text">Description</label>
                          <textarea id="summernote" name="description">{{$single_fornt_menu->description}}</textarea>
                        </div>
                        
                        <div class="form-group mt-3">
                            <div>
                                <button type="submit" class="btn btn-primary">Update Front</button>
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