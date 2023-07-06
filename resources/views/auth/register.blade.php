<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/style.css"/>
	<title>Student Register</title>
	
	
  </head>
<body>
	<h2><span class="mod"> Register</span></h2>
<form method="POST" action="/store">
<div><label for="Name">User Name <span class="spans">*</span></label>
				<input type="text" name="name" id="Name" value="{{old('name')}}"><br><br>
                  
            </div>
            <label for="Email">Email <span class="spans">*</span></label>
				<input type="Email" name="email" id="Email" value="{{old('email')}}"><br><br>
                <div>
                <label for="password">Password <span class="spans">*</span></label>
				<input type="password" name="password" id="password" value="{{old('password')}}"><br><br>
                
			<label for="password1">Confirm Password <span class="spans">*</span></label>
				<input type="password" name="password_confirmation" id="password1" value="{{old('password1')}}" ><br><br>
                <div><label for="Address">Address <span class="spans">*</span></label>
				<input type="text" name="address" id="address" value="{{old('address')}}"><br><br>
                  
            </div>
                <br>
	<div class="border3">

			<input type="submit" name="sub" id="sub" value="+ Register" class="button1">

			<input type="reset" name="res" id="res" value="X Reset" class="button2">
            @csrf
	</div>

   
</form>