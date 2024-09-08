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
                    <h4>User Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th class="text-center">SL.</th>
                          <th class="text-center">Name</th>
                          <th class="text-center">Gmail</th>
                          <th class="text-center">Action</th>
                        </tr>
                        
                        @foreach ($users as $user)
                            
                        <tr>
                          <td class="text-center">{{$loop->iteration}}</td>
                          <td class="text-center">{{$user->name}}</td>
                          <td class="text-center">{{$user->gmail}}</td>
                          <td class="text-center">
                            <div class="d-flex">
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary me-2">Edit</a>
                                
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
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