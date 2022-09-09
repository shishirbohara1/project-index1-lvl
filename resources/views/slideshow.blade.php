@extends('master')
@section("content")
<style>
  /* about section */
#about {
  display: flex;
  flex-direction: column;
  box-sizing: border-box;
  padding: 50px;
  background-color: #7B68EE;
  color: #fff;
  margin-top: -10px;
}
h1.headings {
  text-align: center;
  font-size: 3rem;
  padding-bottom: 20px;
  color: #fff;
}

#intro {
  margin: 0 75px;
}
.pic {
  display: flex;
}

.pic img {
  width: 485px;
  height: 380px;
}
.about-title {
  color: rgb(224, 159, 39);
  font-weight: bold;
  font-size: 2rem;
  margin-bottom: 10px;
}

@media only screen and (max-width: 768px) {
  #about {
  padding: 0px;
}
  .pic  {
    display: flex;
    flex-direction: column;
  }
  #intro{
    margin: 0 25px;
  }
}
/*Profile card css*/
/* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    min-height: 100vh;
    background: linear-gradient(to bottom, #000428, #004683);
}

.container {
    margin-top: 100px;
}

.container .row .col-lg-4 {
    display: flex;
    justify-content: center;
}

.card {
    position: relative;
    padding: 0;
    margin: 0 !important;
    border-radius: 20px;
    overflow: hidden;
    max-width: 280px;
    max-height: 340px;
    cursor: pointer;
    border: none;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);

}

.card .card-image {
    width: 100%;
    max-height: 340px;
}

.card .card-image img {
    width: 100%;
    max-height: 340px;
    object-fit: cover;
}

.card .card-content {
    position: absolute;
    bottom: -180px;
    color: #fff;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(15px);
    min-height: 140px;
    width: 100%;
    transition: bottom .4s ease-in;
    box-shadow: 0 -10px 10px rgba(255, 255, 255, 0.1);
    border-top: 1px solid rgba(255, 255, 255, 0.2);
}

.card:hover .card-content {
    bottom: 0px;
}

.card:hover .card-content h4,
.card:hover .card-content h5 {
    transform: translateY(10px);
    opacity: 1;
}

.card .card-content h4,
.card .card-content h5 {
    font-size: 1.1rem;
    text-transform: uppercase;
    letter-spacing: 3px;
    text-align: center;
    transition: 0.8s;
    font-weight: 500;
    opacity: 0;
    transform: translateY(-40px);
    transition-delay: 0.2s;
}

.card .card-content h5 {
    transition: 0.5s;
    font-weight: 200;
    font-size: 0.8rem;
    letter-spacing: 2px;
}

.card .card-content .social-icons {
    list-style: none;
    padding: 0;
}


.card .card-content .social-icons li {
    margin: 10px;
    transition: 0.5s;
    transition-delay: calc(0.15s * var(--i));
    transform: translateY(50px);
}


.card:hover .card-content .social-icons li {
    transform: translateY(20px);
}

.card .card-content .social-icons li a {
    color: #fff;
}

.card .card-content .social-icons li a span {
    font-size: 1.3rem;
}

@media(max-width: 991.5px) {
    .container {
        margin-top: 20px;
    }

    .container .row .col-lg-4 {
        margin: 20px 0px;
    }
}
.teams {
  text-align: center;
  font-size: 3rem;
  padding-bottom: 20px;
  color: #fff;
}
/*about image */
.responsive {
  width: 100%;
  height: auto;
}
</style>


<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://res.cloudinary.com/dnximxppc/image/upload/v1662705061/second_ntb9ec.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://res.cloudinary.com/dnximxppc/image/upload/v1662705061/third_igzht1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://res.cloudinary.com/dnximxppc/image/upload/v1662705061/first_jsyk3i.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://res.cloudinary.com/dnximxppc/image/upload/v1662705061/fourth_snjrce.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://res.cloudinary.com/dnximxppc/image/upload/v1662705060/fifth_lkczp4.webp" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section id="about">
	<h1 class="headings">About Us</h1>
	<div class="pic">
		<div class="about-img">
    <img src="https://res.cloudinary.com/dnximxppc/image/upload/v1662704964/cld-sample-2.jpg"class="responsive" alt="About"/>
		</div>
		<div id="intro">
			<h2 class="about-title">Welcome to Social</h2>
			<p class="about-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium varius sem in molestie.<br>
      Integer eget velit a sapien pellentesque mollis. Curabitur nec nisi lectus. Vivamus aliquam venenatis ante, eget lacinia ex ultrices nec.<br>
       Maecenas hendrerit, justo quis facilisis viverra, est lorem mollis magna, eu vulputate urna dolor et neque. Proin porttitor mauris ut sem scelerisque lobortis.<br>			
       Maecenas hendrerit, justo quis facilisis viverra, est lorem mollis magna, eu vulputate urna dolor et neque. Proin porttitor mauris ut sem scelerisque lobortis.<br>			
       Maecenas hendrerit, justo quis facilisis viverra, est lorem mollis magna, eu vulputate urna dolor et neque. Proin porttitor mauris ut sem scelerisque lobortis.<br>			
       Maecenas hendrerit, justo quis facilisis viverra, est lorem mollis magna, eu vulputate urna dolor et neque. Proin porttitor mauris ut sem scelerisque lobortis.<br>			
       Maecenas hendrerit, justo quis facilisis viverra, est lorem mollis magna, eu vulputate urna dolor et neque. Proin porttitor mauris ut sem scelerisque lobortis.<br>			
			
				  </p>
		</div>
	</div>
</section>
<!--This is pofile card first row-->
<section id="team">
  <h1 class="teams">Our Team</h1>
<div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="https://lifetouch.com/wp-content/uploads/2018/06/Underclass_girlwithbluebg.jpg"
                            alt="">
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">Gita Acharya</h4>
                        <h5>Chairman</h5>

                        <ul class="social-icons d-flex justify-content-center">
                            <li style="--i:1">
                                <a href="#">
                                    <span class="fab fa-facebook"></span>
                                </a>
                            </li>
                            <li style="--i:2">
                                <a href="#">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li style="--i:3">
                                <a href="#">
                                    <span class="fab fa-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="https://lifetouch.com/wp-content/uploads/2018/06/Underclass_girlwithbluebg.jpg"
                            alt="">
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">Sita Wagle</h4>
                        <h5>Director</h5>

                        <ul class="social-icons d-flex justify-content-center">
                            <li style="--i:1">
                                <a href="#">
                                    <span class="fab fa-facebook"></span>
                                </a>
                            </li>
                            <li style="--i:2">
                                <a href="#">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li style="--i:3">
                                <a href="#">
                                    <span class="fab fa-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="https://lifetouch.com/wp-content/uploads/2018/06/Underclass_girlwithbluebg.jpg"
                            alt="">
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">Suman Thapa</h4>
                        <h5>Director</h5>

                        <ul class="social-icons d-flex justify-content-center">
                            <li style="--i:1">
                                <a href="#">
                                    <span class="fab fa-facebook"></span>
                                </a>
                            </li>
                            <li style="--i:2">
                                <a href="#">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li style="--i:3">
                                <a href="#">
                                    <span class="fab fa-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--This is pofile card second row-->
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="https://lifetouch.com/wp-content/uploads/2018/06/Underclass_girlwithbluebg.jpg"
                            alt="">
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">Gita Acharya</h4>
                        <h5>Chairman</h5>

                        <ul class="social-icons d-flex justify-content-center">
                            <li style="--i:1">
                                <a href="#">
                                    <span class="fab fa-facebook"></span>
                                </a>
                            </li>
                            <li style="--i:2">
                                <a href="#">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li style="--i:3">
                                <a href="#">
                                    <span class="fab fa-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="https://lifetouch.com/wp-content/uploads/2018/06/Underclass_girlwithbluebg.jpg"
                            alt="">
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">Sita Wagle</h4>
                        <h5>Director</h5>

                        <ul class="social-icons d-flex justify-content-center">
                            <li style="--i:1">
                                <a href="#">
                                    <span class="fab fa-facebook"></span>
                                </a>
                            </li>
                            <li style="--i:2">
                                <a href="#">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li style="--i:3">
                                <a href="#">
                                    <span class="fab fa-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="https://lifetouch.com/wp-content/uploads/2018/06/Underclass_girlwithbluebg.jpg"
                            alt="">
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">Suman Thapa</h4>
                        <h5>Director</h5>

                        <ul class="social-icons d-flex justify-content-center">
                            <li style="--i:1">
                                <a href="#">
                                    <span class="fab fa-facebook"></span>
                                </a>
                            </li>
                            <li style="--i:2">
                                <a href="#">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li style="--i:3">
                                <a href="#">
                                    <span class="fab fa-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--This is pofile card third row-->
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="https://lifetouch.com/wp-content/uploads/2018/06/Underclass_girlwithbluebg.jpg"
                            alt="">
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">Gita Acharya</h4>
                        <h5>Chairman</h5>

                        <ul class="social-icons d-flex justify-content-center">
                            <li style="--i:1">
                                <a href="#">
                                    <span class="fab fa-facebook"></span>
                                </a>
                            </li>
                            <li style="--i:2">
                                <a href="#">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li style="--i:3">
                                <a href="#">
                                    <span class="fab fa-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="https://lifetouch.com/wp-content/uploads/2018/06/Underclass_girlwithbluebg.jpg"
                            alt="">
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">Sita Wagle</h4>
                        <h5>Director</h5>

                        <ul class="social-icons d-flex justify-content-center">
                            <li style="--i:1">
                                <a href="#">
                                    <span class="fab fa-facebook"></span>
                                </a>
                            </li>
                            <li style="--i:2">
                                <a href="#">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li style="--i:3">
                                <a href="#">
                                    <span class="fab fa-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card p-0">
                    <div class="card-image">
                        <img src="https://lifetouch.com/wp-content/uploads/2018/06/Underclass_girlwithbluebg.jpg"
                            alt="">
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2">Suman Thapa</h4>
                        <h5>Director</h5>

                        <ul class="social-icons d-flex justify-content-center">
                            <li style="--i:1">
                                <a href="#">
                                    <span class="fab fa-facebook"></span>
                                </a>
                            </li>
                            <li style="--i:2">
                                <a href="#">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li style="--i:3">
                                <a href="#">
                                    <span class="fab fa-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    
@endsection