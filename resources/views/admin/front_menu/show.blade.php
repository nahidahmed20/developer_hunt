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
                          <th class="text-center">Location</th>
                          <th class="text-center">Number</th>
                          <th class="text-center">Gmail</th>
                          <th class="text-center">Logo</th>
                          <th class="text-center">Image</th>
                          <th class="text-center">Description</th>
                          <th class="text-center">Action</th>
                        </tr>
                        
                        @foreach ($frnot_menus as $frnot_menu)
                            
                        <tr>
                          <td class="text-center">{{$loop->iteration}}</td>
                          <td class="text-center">{{$frnot_menu->location}}</td>
                          <td class="text-center">{{$frnot_menu->number}}</td>
                          <td class="text-center">{{$frnot_menu->gmail}}</td>
                          <td class="text-center"><img src="{{ asset('logos/'.$frnot_menu->image) }}" alt="" height="80" width="120"></td>
                          <td class="text-center"><img src="{{ asset('storage/'.$frnot_menu->image) }}" alt="" height="80" width="120"></td>
                          <td class="text-center">{{ Str::limit(strip_tags($frnot_menu->description), 30) }}</td>
                          <td class="text-center">
                            <div class="d-flex">
                                <a href="{{ route('front-menu.edit', $frnot_menu->id) }}" class="btn btn-primary me-2">Edit</a>
                                
                                <form action="{{ route('front-menu.destroy', $frnot_menu->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                    @csrf
                                    @method('DELETE')
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