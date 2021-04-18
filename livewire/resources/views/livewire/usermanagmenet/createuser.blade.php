<div>
      <div class="col-xl-12">
      			 @if (session()->has('message'))
		            <div class="alert alert-success">
		                {{ session('message') }}
		            </div>
		        @endif
	             <div class="card">
	                <!-- Card header -->
	                <div class="card-header border-0">
	                  <h3 class="mb-0">Users</h3>
	                </div>
	                <div class="table-responsive">
	                  <table class="table align-items-center table-flush">
		                    <thead class="thead-light">
		                      <tr>
		                        <th scope="col" class="sort" data-sort="name">Name</th>
		                        <th scope="col" class="sort" data-sort="budget">Email</th>
		                        <th scope="col" class="sort" data-sort="status">Delete</th>
		                      </tr>
		                    </thead>
		                    <tbody class="list">
		                    	@foreach($users as $user)
		                      	<tr>
			                        <td class="budget">
			                          {{ $user->name }}
			                        </td>
			                        <td>
			                          <span class="badge badge-dot mr-4">
			                            <i class="bg-warning"></i>
			                            <span class="status">
			                            	{{ $user->email }}
			                            </span>
			                          </span>
			                        </td>
			                        <td>
			                          <button class="btn btn-danger">
				                          	Delete
			                          </button>
			                        </td>
		                     	</tr>
		                     	@endforeach
		                    </tbody>
	                  </table>
	                </div>
              </div>
 
      </div>
</div>
