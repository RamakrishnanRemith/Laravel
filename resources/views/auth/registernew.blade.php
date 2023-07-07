<!DOCTYPE html>
<html>
<head>
	<title>Student Register</title>
	<style>
 h2{
	border: 1px solid hsl(0, 0%, 87%);
	width: 100%;
	height: 40px;
	border-radius: 0.3em;
	padding-bottom: 10px;
	position:relative;
}
div.border2{
	border:1px solid #ddd;
	border-radius: 5px;
}
div.border3{
	text-align: center;
	border:1px solid #ddd;
	border-radius: 5px;
	height: 40px;
}
.button1{
	height: 30px;
	background-color: green;
	border:none;
	color: white;
	width: 100px;
	margin-top: 5px;
}
.button2{
	height: 30px;
	background-color: red;
	border: none;
	color: white;
	width: 100px;
	margin-top: 5px;
}
img{
	padding-left: 5px;
	padding-right: 5px;
}
label{
	margin-left: 80px;
	display: inline-block;
	width: 30%;
	text-align: right;
	color: blue;
}
input{
	height: 25px;
	padding-left: 10px;
	margin-left: 20px;
}

textarea{
	margin-left: 20px;
}

.spans{
	color: red;
}
.heading{
	position: relative;
	top:5px;
}
.addresses{
	position: relative;
	bottom: 110px;
}
.mod{
	color: red;
}

.padd{
	padding: 10px;
}
.forms{
	padding-top: 30px;
}

.file{
	position: relative;
	right: 10px;
}
.bottoms{
	position: relative;
	top: 20px;
}

.text-danger{
    color: red;
    display: inline-block;
	width: 30%;
    position: relative;
    left: 560px;
    bottom: 20px;

}

      </style>


</head>
<body>
	<h2>Admin .<span class="mod"> Register</span></h2>

	<div class="border2">
		<div class="bottoms">
		<form action="/store" name="myForm" method="post"　class="forms">
			<div><label for="Name">User Name <span class="spans">*</span></label>
				<input type="text" name="name" id="Name" value="{{old('name')}}"><br><br>
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
            </div>
            <div> <label for="gender">Gender <span class="spans">*</span></label>
				<input type="radio" class="male" name="gender" value="1" {{ old('gender') == '1' ? 'checked' : '' }}>Male<input type="radio" class="female" name="gender" value="2" {{ old('gender') == '2' ? 'checked' : '' }} >Female<br><br>
                @if ($errors->has('gender'))
                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                    @endif </div>
            <label for="Email">Email <span class="spans">*</span></label>
				<input type="Email" name="email" id="Email" value="{{old('email')}}"><br><br>
                <div>   @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif </div>
           <label for="contact">Contact <span class="spans" >*</span></label>
				<input type="text" name="contact" id="contact" value="{{old('contact')}}"><br><br>
                <div>  @if ($errors->has('contact'))
                <span class="text-danger">{{ $errors->first('contact') }}</span>
                @endif  </div>
            <label for="SelectedDate">Dob <span class="spans">*</span></label>
				<input type="date" name="dob" id="txtDate" value="{{old('dob')}}"><br><br>
                <div> @if ($errors->has('dob'))
                    <span class="text-danger">{{ $errors->first('dob') }}</span>
                    @endif</div>
			<label for="password">Password <span class="spans">*</span></label>
				<input type="password" name="password" id="password" value="{{old('password')}}"><br><br>
                <div>   @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif </div>
			<label for="password1">Confirm Password <span class="spans">*</span></label>
				<input type="password" name="password_confirmation" id="password1" value="{{old('password1')}}" ><br><br>
                <div>  @if ($errors->has('password_confirmation'))
                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                @endif </div>



		</div>
	</div>	<br>
	<div class="border3">

			<input type="submit" name="sub" id="sub" value="+ Register" class="button1">

			<input type="reset" name="res" id="res" value="x Cancel" class="button2">
            @csrf
	</div>


		</form>

	</div>

</body>
</html
