@extends('admin.master')

@section('content')

  
	  <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Simple Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th class="text-center">SL.</th>
                          <th class="text-center">Title</th>
                          <th class="text-center">Slug</th>
                          <th class="text-center">Short Description</th>
                          <th class="text-center">Long Description</th>
                          <th class="text-center">Image</th>
                          <th class="text-center">Action</th>
                        </tr>
                        
                        @foreach ($services as $service)
                        <tr>
                          <td class="text-center">{{$loop->iteration}}</td>
                          <td class="text-center">{{$service->title}}</td>
                          <td class="text-center">{{$service->slug}}</td>
                          <td class="text-center">{{ Str::limit(strip_tags($service->short_description), 30)}}</td>
                          <td class="text-center">{{ Str::limit(strip_tags($service->long_description), 30) }}</td>
                          <td class="text-center"><img src="{{ asset('storage/'.$service->image) }}" alt="" height="80" width="120"></td>
                          
                          <td class="text-center">
                            <div class="d-flex">
                                <a href="{{ route('service.edit', $service->slug) }}" class="btn btn-primary me-2">Edit</a>
                                
                                <form action="{{ route('service.destroy', $service->slug) }}" method="get" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                        </tr>
                         @endforeach

                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
      </div>
      
	  

@endsection