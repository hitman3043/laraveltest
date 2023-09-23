@extends('pages.layouts.app')

<div class="container">
        <h2 class="text-center mt-4">Connection Details</h2>
        <div class="row">
       <div class="col-sm-2">
       </div> 	
        <div class="col-sm-10">
        	 @if ( Session::has('errors'))
        	
			  <div class="ms-5 mt-4 alert alert-danger" align="center">
			  <span>{{ $errors }}</span>
			  </div>
	
			@endif
        
        <form method="post" action="{{ route('connect') }}">
            @csrf
            <div class="p-5 formbox">
            <div class="form-group mb-2">
                <label for="host">Enter Host:</label>
                <input type="text" class="form-control" id="host" name="host" required>
            </div>
            <div class="form-group mb-2">
                <label for="username">Enter Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group mb-2">
                <label for="password">Enter Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group mb-2">
                <label for="port">Enter Port:</label>
                <input type="number" class="form-control" id="port" name="port" required>
            </div>
            <div class="form-group mt-4">
            <center><input type="submit" class="btn btn-primary" value="Connect"><center>
            </center>
        </div>
        </form>
        </div>
         <div class="col-sm-2">
       </div> 
    </div>
    </div>

@extends('pages.layouts.footer')