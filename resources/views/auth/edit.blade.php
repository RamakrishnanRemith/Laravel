<html>
<head>
	<title>Student Edit</title>
	<style>
 h2{
	border: 1px solid #ddd;
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
	<h2>Student .<span class="mod"> Edit</span></h2>

	<div class="border2">
		<div class="bottoms">
		<form action="/update" name="myForm" method="post"　class="forms">
            @csrf
            <input type="hidden" name="id" value="{{$data['id']}}">
			<label for="Name">Student Name <span class="spans">*</span></label>
				<input type="text" name="name" value="{{$data['name']}}"><br><br>
                  <div> </div>
			<!-- <label for="SelectedDate">Dob <span class="spans">*</span></label>
				<input type="date" name="dob" id="txtDate" value="{{$data['dob']}}"><br><br>
                <div> </div> -->

            <label for="Email">Email <span class="spans">*</span></label>
				<input type="Email" name="email" id="Email" value="{{$data['email']}}"><br><br>
                <div>  </div>
			<label for="password">Password <span class="spans">*</span></label>
				<input type="password" name="password" id="password" value="{{$data['password']}}" ><br><br>
                <div>   </div>

			<!-- <label for="contact">Contact <span class="spans">*</span></label>
				<input type="text" name="contact" id="contact" value="{{$data['contact']}}"><br><br>
                <div>  </div> -->

			<!-- <label for="zip">Pincode <span class="spans">*</span></label>
				<input type="text" name="zip" id="zip" value="{{$data['zip']}}"><br><br>
                <div>  </div> -->


		</div>
	</div>	<br>
	<div class="border3">

			<button type="submit" name="sub" class="button1">Update</button>

			<input type="reset" name="res" id="res" value="x Cancel" class="button2">

	</div>


		</form>

	</div>

</body>
</html
