<div>
    <div class="container">
    	<br /> <br/ > <br />
    	<div class="row justify-content-center">
	        <div class="col-lg-6 col-md-8">
	          <div class="card bg-secondary border-0">
	            <div class="card-body px-lg-5 py-lg-5">
	          
	              <form role="form" wire:submit.prevent="submit">
	                <div class="form-group">
	                    @error('name') 
	                   		<small>
	                   			<font color="red">
	                   				<b>
	                   					* {{ $message }}
		                   			</b>
		                   		</font>
	                   		</small> 
	                    @enderror
	                  <div class="input-group input-group-merge input-group-alternative mb-3">
	                    <div class="input-group-prepend">
	                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
	                    </div>
	                    <input class="form-control" placeholder="Name" wire:model="name" type="text">
	                  </div>

	                </div>
	                <div class="form-group">
	                	@error('email') 
	                   		<small>
	                   			<font color="red">
	                   				<b>
	                   					* {{ $message }}
		                   			</b>
		                   		</font>
	                   		</small> 
	                    @enderror
	                  <div class="input-group input-group-merge input-group-alternative mb-3">
	                    <div class="input-group-prepend">
	                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
	                    </div>
	                    <input class="form-control" placeholder="Email" wire:model="email" type="email">
	                  </div>
	                </div>
	                <div class="form-group">
	                	@error('password') 
	                   		<small>
	                   			<font color="red">
	                   				<b>
	                   					* {{ $message }}
		                   			</b>
		                   		</font>
	                   		</small> 
	                    @enderror
	                  <div class="input-group input-group-merge input-group-alternative">
	                    <div class="input-group-prepend">
	                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
	                    </div>
	                    <input class="form-control" placeholder="Password" wire:model="password" type="password">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <div class="input-group input-group-merge input-group-alternative">
	                    <div class="input-group-prepend">
	                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
	                    </div>
	                    <input class="form-control" placeholder="Password" wire:model="password_confirmation" type="password">
	                  </div>
	                </div>

	                <div class="text-muted font-italic"><small>password strength: <span class="text-success font-weight-700">strong</span></small></div>
	                <div class="row my-4">
	                  <div class="col-12">
	                    <div class="custom-control custom-control-alternative custom-checkbox">
	                      <input class="custom-control-input" id="customCheckRegister" type="checkbox">
	                      <label class="custom-control-label" for="customCheckRegister">
	                        <span class="text-muted">I agree with the <a href="#!">Privacy Policy</a></span>
	                      </label>
	                    </div>
	                  </div>
	                </div>
	                <div class="text-center">
	                  <button type="submit" class="btn btn-primary mt-4">Create account</button>
	                </div>
	              </form>
	            </div>
	          </div>
	        </div>
	    </div>
    </div>
</div>
