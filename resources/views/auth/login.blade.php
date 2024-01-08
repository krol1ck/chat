<x-guest-layout>
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
    <x-style/>
    <div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
                                        <form action="{{route('login')}}" method="post">
                                            @csrf
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Log In</h4>
											<div class="form-group">
												<input type="email" name="email" class="form-style" placeholder="Your Email" id="logemail" value="{{old('email')}}">
												<i class="input-icon uil uil-at"></i>
                                                @error('email')
                                                    {{ $message }}
                                                @enderror
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="password" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
                                                @error('password')
                                                    {{ $message }}
                                                @enderror
											</div>
											<button type="submit" class="btn mt-4">submit</button>
                            				<p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
				      					</div>
                                        </form>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="center-wrap">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Sign Up</h4>
											<div class="form-group">
												<input type="text" name="name" class="form-style" placeholder="Your Full Name" id="logname" value="{{old('name')}}">
												<i class="input-icon uil uil-user"></i>
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
											</div>	
											<div class="form-group mt-2">
												<input type="email" name="email" class="form-style" placeholder="Your Email" id="logemail" value="{{old('email')}}">
												<i class="input-icon uil uil-at"></i>
                                                @error('email')
                                                    {{ $message }}
                                                @enderror
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="password" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
                                                @error('password')
                                                    {{ $message }}
                                                @enderror
											</div>
                                            <div class="form-group mt-2">
												<input type="password" name="password_confirmation" class="form-style" placeholder="Confirm Password" id="password_confirmation" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
                                                @error('password_confirmation')
                                                    {{ $message }}
                                                @enderror
											</div>
											<button type="submit" class="btn mt-4">submit</button>
                                        </form>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>

</x-guest-layout>
