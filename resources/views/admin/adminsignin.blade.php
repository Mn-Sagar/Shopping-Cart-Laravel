@extends('layout.admin')

@section('content')
<div class="row" >
 <div class="container-fluid">
	<div class="col-md-4 col-md-offset-4">
    	<h1>Admin Sign In</h1>
        @if(count($errors)>0)
        	<div class="alert alert-danger">
            	@foreach($errors->all() as $error)
                	<p>{{ $error }}</p>
                @endforeach
        	</div>
        @endif
        <form action="/adminsignin" method="post" style="max-height:1500px">
        	<div class="form-group">
            	<label for="email">E-Mail</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>
            
            <div class="form-group">
            	<label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Sign In</button>
            {{  csrf_field()}}
            <p>Register an Admin Account?<a href="/adminsignup">Register here</a></p>
        </form>
     </div>
 </div>
</div>
@endsection