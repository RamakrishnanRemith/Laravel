<!DOCTYPE html>
<html>
<head>
	<title>MENU</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <link rel="stylesheet" href="css/contactpage.css"/>
   <link rel="stylesheet" href="css/homepage.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries" >
</script>


	<script type="text/javascript">
	function showMap(lat,lng) {
        alert("hiiii")
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
<!-- <style>#map {
    height: 300px;
}</style> -->
<body>
    <div class="head">
        <ul>
            <li><a href="/homaepage1">ABOUT</a></li>
            <li><a href="#">LOCATIONS</a>
            <ul class="subhead">
              <li><a href="#">India</a>
                <ul class="topic">
                    <li><a href="#">tamilnadu</a></li>
                    <li><a href="#">kerala</a></li>
                    <li><a href="#">mumbai </a></li>
                </ul>
            
            </li>
            </ul>
            </li>
            <li><a href="#">MUSIC</a></li>
            <li><a href="#">EVENTS</a>
            <li><a href="/photo">Gallery</a></li>
            <li><a href="#">ONLINE</a></li>
            <li><a href="/contactpage">CONTACT_US</a></li>
        <ul>
        </div>

    <section class="contact">
       <div class="content">
        <h2>Contact Us</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Fuga voluptatem eos rem excepturi culpa deserunt quidem optio non dolorem sint.</p>
       </div> 
       <div class="container">
         <div class="contactInfo">
             <div class="box" style="" >
               <div class="icon"  id="map">
               	<!-- <button onclick="showMap(8.6928599,77.7372637)"><i class="fa fa-map-marker" aria-hidden="true"></i></button> -->	<i class="fa fa-map-marker" aria-hidden="true"></i></div>	
                  <div class="text">
                     <h3>Adresss</h3>
                     <p>sdfghjsdfghj,<br>erd6ft7gyuhji,ewrstyfguhj,<br>tcfyvubhnjim
                     </p>
                 </div>
             </div>
            <div class="box">
             <div class="icon"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Phone</h3>
                    <p>9790508963
                    </p>
                </div>
            </div>
            <div class="box">
             <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Email</h3>
                    <p>sdfghjkdfghjkdfgh@gmail.com
                    </p>
                </div>
            </div>
            </div>
           <div class="contactForm">
             <form class="form-horizontal" action="{{route('send.contact_mail')}}" method="post">
                @csrf
                <h2>Send Message</h2>
                <div class="inputBox">
                   <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                    <span>Full Name</span>
                </div>
                <div class="inputBox">
                    <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                    <span>Type your message...</span>
                </div>
                  <div class="inputBox">
                     <input type="submit" name="" value="send">
                   
                </div>
            </form>
           
         </div>
       </div>
    </section>
</body>
</html>