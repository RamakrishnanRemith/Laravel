<html>
<head>
	<style>
        ul{
			list-style-type: none;
			margin-bottom: 10px;
			padding: 0;
			overflow: hidden;
			background-color: white;
			width: 600px;
		}

li{
			float: left;
			border-right: 1px solid white;
			width: 90px;
			height: 27px;
			background-color: lightblue;
	}

li a{
			 display: block;
			 color: black;
			 text-align: center;
			 text-decoration: none;
	}

		li a:hover{
			background-color: white;
			border-bottom: 3px solid blue;
		}
		h1{
			color: red;
			border-bottom: 1px solid lightgray;
		}
		h2{
 		border:1px solid #ddd;
 		width: 100%;
 		height: 40px;
 		border-radius: 0.3em;
 		padding-bottom: 10px;
 		position: relative;

 	}
		.img{
			padding-left: 5px;
			padding-right: 5px;
			position: relative;top: 5px;
		}
		.button{
			background-color: blue;
			border:none;
			width: 90px;
			height: 30px;
			color: white;
		}
		.button1{
			width: 90px;
			height: 30px;
			float: right;
			color: white;
			background-color: orange;
			border:none;
		}

		.label1{
			margin-left: 130px;
			display: inline-block;
			width: 30%;
			color: blue;
			text-align:right;
		}
		.label2{
			margin-left: 70px;
			display: inline-block;
			width: 20%;
		}
		.lucky{
			padding: 10px;
			border:1px solid lightgray;
			border-radius: 5px;
		}
		.last{
			border-right: none;
		}
		.heads
		{
			float: right;
			margin-right:50px;
		}
		.spaner{
			float: right;
			margin-right: 90px;
		}
		.images
			{
				width: 100px;
				height: 150px;
				float: right;
				margin-right: 100px;
				 border:1px solid lightgray;
			}
		.changes
		{
		position: relative;
		float: right;
		left: 28px;
		top: 5px;
		bottom:30px;
		}
		.new3
		{
			padding: 5px 18px;
			background-color: blue;
			color: white;
			text-decoration: none;
		}
#map{
	height:300px;
}


    </style>
	  <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries" >
</script>

	<script type="text/javascript">
	function showMap(lat,lng) {
		var mylatlng={
			lat:lat,
			lng:lng
		};

		var map = new google.maps.Map(document.getElementById("map"), {
			zoom:10,
			center:mylatlng,
		});

		new google.maps.Marker({
			position:mylatlng,
			map,
		});


		
	} </script>
</head>
<body>
	<h1>STUDENT MANAGEMENT SYSTEM<img src="C:\Dhanapaul\stu.png" width="50" height="50" class="heads"></h1>
	<div>
		<ul>
			<li><a href="admin.html" target="blank"><b>Admin</b></a></li><li><a href="teacher.html" target="blank"><b>Teacher</b></a></li><li><a href="student.html" target="blank"><b>Student</b></a></li><li><a href="course.html" target="blank"><b>Course</b></a></li><li><a href="batch.html" target="blank"><b>Batch</b></a></li><li class="last" target="blank"><a href="fees.html" target="blank"><b>Fees</b></a></li>
		</ul>
	</div>
		<div>
			<h2><img src="C:\Dhanapaul/stu.png" class="img" width="40" height="40">Admin View</h2>

             @foreach ($users as $item)
           <a href="{{ route('edit', $item['id']) }}">Edit</a><br>
            <label class="label1">Studentid</label><label class="label2">{{$item['student_id']}}</label><p>
			<label class="label1">User Name</label><label class="label2">{{$item['name']}}</label><p>
			<label class="label1">Email</label><label class="label2">{{$item['email']}}</label><p>
				<div id="map"></div>
	<button onclick="showMap(8.6928599,77.7372637)">Show Map</button>
        @endforeach
    </div>
	
	
</body>
</html>