<!DOCTYPE html>
<html>
<head>
	<title>MENU</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/contactpage.css"/>
    <link rel="stylesheet" href="css/homepage.css"/>
   <!--  <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
    <script src="{{ asset('js/homepage.js') }}"></script> -->
    <style>
	#map{
	height:300px;
}


    </style>
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
            <li><a href="#">STORIES</a></li>
            <li><a href="#">ONLINE</a></li>
            <li><a href="/contactpage">CONTACT_US</a></li>
        <ul>
        </div>


<div class="breadcrumb">
    <div class="remith" id="map">
				<button onclick="showMap(8.6928599,77.7372637)">Show Map</button>		
		</div>
         
     </div>
      <div >
        <h2>Contact Address:</h2>
        <p className="contact-address">
         ,
        </p>
        <p className="contact-address">
          Vetturnimadam (P.O), Nagercoil �? 629003
        </p>
        <p className="contact-address">Kanyakumari District, Tamilnadu.</p>
        <p>
          Phone: <a href="tel:+91-4652-229379">+91-4652-229379</a>
        </p>
        <p>
          Mobile: <a href="tel:+91-9944670582">+91-9944670582</a>,
          <a href="tel:+91-9790526876">+91-9790526876</a>
        </p> </div>
   
          <form class="form-horizontal" action="{{route('send.contact_mail')}}" method="post">
          
            @csrf
          <fieldset>
            <legend class="text-center">Contact us</legend>

            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
             
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
           
            </div>

            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
            
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
            
            </div>

            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              
            </div>

            <!-- Form actions -->
            <div class="form-group">
             
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
             
            </div>
          </fieldset>
          </form>
        
        </div>
     
  </body>
</head>  </html>