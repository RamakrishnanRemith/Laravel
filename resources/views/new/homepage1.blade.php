<!DOCTYPE html>

	
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
    <script src="{{ asset('js/homepage.js') }}"></script> 
        
    </head>
    <body>
        
       <div class="head">
        <ul>
            <li><a href="/homaepag">ABOUT</a></li>
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
            <li><a href="/products">Product</a>
            <li><a href="/photo">Gallery</a></li>
            <li><a href="#">ONLINE</a></li>
            <li><a href="/contactpage1">CONTACT_US</a></li>
        <ul>
        </div>
         <!--    <ul class="name">
              <li><a href="#">India</a>
                <ul class="topic">
                    <li><a href="#">tamilnadu</a></li>
                    <li><a href="#">kerala</a></li>
                    <li><a href="#">mumbai Q/A</a></li>
                </ul>
            </li>
              <li><a href="#">NorthAmerica</a>
                <ul class="topic">
                    <li><a href="#">canada</a></li>
                    <li><a href="#">US</a></li>
                </ul>
            </li>
              <li><a href="#">dubai</a>
                <ul class="topic">
                    <li><a href="#">Tutorial</a></li>
                    <li><a href="#">Program</a></li>
                    <li><a href="#">Interview Q/A</a></li>
                </ul>
            </li>
              <li><a href="#">japan</a>
                <ul class="topic">
                    <li><a href="#">Tutorial</a></li>
                    <li><a href="#">Program</a></li>
                    <li><a href="#">Interview Q/A</a></li>
                </ul>
            </li>
            </ul>
            </li>
           
                <ul class="name">
                <ul class="topic">
                    <li><a href="#">Tutorial</a></li>
                    <li><a href="#">Program</a></li>
                    <li><a href="#">Interview Q/A</a></li>
                  </ul>  
                </ul>
            </li>
           
            <select class="nav-language" tabindex="0">
                <option value="en">EN</option>
                <option value="de">DE</option>
                <option value="fr">FR</option>
                <option value="es">ES</option>
                <option value="ca">CA</option>
                <option value="pt">PT</option>
                <option value="pb">PB</option>
                <option value="ua">UA</option>
                <option value="ru">RU</option>
                <option value="sv">SV</option>
                <option value="id">ID</option>
                <option value="da">DA</option>
                <option value="no">NO</option>
                <option value="nl">NL</option>
                <option value="it">IT</option>
                <option value="ja">JA</option>
                <option value="hu">HU</option>
                <option value="ro">RO</option>
            </select>
        </ul>  -->
        
       
       

 <section class="showcase">
    <header>
      <h2 class="logo">Travel</h2>
      <div class="toggle"></div>
    </header>
    <!-- <video src="/images/flower.mp4" muted loop autoplay></video> -->
    <div class="overlay"></div>
    <div class="text">
   <h2>Never Stop</h2>
   <h3>ExploringThe World</h3>
   <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque nemo enim labore adipisci distinctio. Commodi, impedit quam! Facilis, aspernatur natus?</p>
   <a href="#">Explore</a>
   
   </div>
   <ul class="social">
    <li><a href="#"><img src="/images/facebook.png" alt=""></a></li>
    <li><a href="#"><img src="/images/instagram.png" alt=""></a></li>
    <li><a href="#"><img src="/images/twitter.png" alt=""></a></li>
   </ul>


  </section>
  <div class="menu">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Home</a></li>
        <li><a href="#">Home</a></li>
        <li><a href="#">Home</a></li>
    </ul>
</div>
<script>const menuToggle = document.querySelector(".toggle");
const showcase = document.querySelector(".showcase");

menuToggle.addEventListener("click", () => {
    menuToggle.classList.toggle("active");
    showcase.classList.toggle("active");
});</script>
 

</body>
        </head>   
</html>