<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travillia</title>
    <link rel="icon" type="image/png" href="logo.png">
    <link rel="stylesheet" href="website.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dancing+Script:wght@400..700&family=Lora:ital,wght@0,400..700;1,400..700&family=Sedan+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dancing+Script:wght@400..700&family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Lora:ital,wght@0,400..700;1,400..700&family=Sedan+SC&display=swap" rel="stylesheet"> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script>

    
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

window.addEventListener('scroll', function() {
    var btnScrollToTop = document.getElementById('btnScrollToTop');
    if (window.pageYOffset > 300) {
        btnScrollToTop.style.display = 'block';
    } else {
        btnScrollToTop.style.display = 'none';
    }
});
    </script>
</head>
<body>
   
    <section id="home" class="page home">
       
        <header>
            <div class="logo">
                <img src="logo.png" alt="Travillia Logo">
            </div>
           
            <a href="signup.php" class="account-icon">
                <img src="account.png" alt="Account Icon">
                <span class="icon-text">Account</span>
                <span class="big">
                    Hello, 
                    <?php 
                    if (isset($_SESSION['user'])) {
                        echo htmlspecialchars($_SESSION['user']); 
                    } else {
                        echo 'Guest'; 
                    }
                    ?>
                </span>
            </a>
            <div id="navigation-bar">
                <nav>
                  <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#reviews">Reviews</a></li>
                    <li><a href="#destination">Destination</a></li>
                    <li><a href="#contact">Contact us</a></li>
                    <li><a href="#about">About us</a></li>
                  </ul>
                </nav>
            </div>
            
            <h1>Welcome to Travillia</h1>
            <p>where the adventure awaits</p>
        </header>
        <a href="#destination" class="button">book now!!</a>
        </section>   
        
        
        <section class="gallery" id="gallery">
       
            <div class="heading">
                <h1>- photo gallery -</h1>
                <h2>travellers' captured memories</h2>
                <p>The whole world is an art gallery when you're mindful. Everywhere, there are beautiful things, and you are now seeing them through the eyes of our esteemed clients.</p>
            </div>
             
 
            <div class="box-container">
              
               <div class="box">
                 <div class="image--img">
                  <img class="image" src="blogthebalearicislands.jpg" alt="" >
                  <div class="img-overlay img-overlay--blur">
                     <div class="img-title">- the belearic islands -</div>
                     <p class="img-desc">This is one of the most popular destinations in the western Mediterranean. You'll find enchanting coves, gorgeous sunsets and lush natural landscapes.</p>
                  </div>
                 </div>
                  <a href="#destination"><i class="fa fa-map-marker" style="font-size:35px;color:rgb(198, 22, 22)"></i></a><span>the belearic islands</span>
                  <h3>spain</h3>
               </div>
 
               <div class="box">
                 <div class="image--img">
                  <img class="image" src="blogedinburghcastlescotland.jpg" alt="" >
                  <div class="img-overlay img-overlay--blur">
                     <div class="img-title">- edinburgh castle -</div>
                     <p class="img-desc">Edinburgh Castle is one of the most exciting historic sites in Western Europe. Set in the heart of Scotland's dynamic capital city, it is sure to capture your imagination. The scenery will take your breath away.</p>
                  </div>
                 </div>
                  <a href="#destination"><i class="fa fa-map-marker" style="font-size:35px;color:rgb(198, 22, 22)"></i></a><span>edinburgh castle</span>
                  <h3>scotland</h3>
               </div>
 
               <div class="box">
                 <div class="image--img">
                  <img class="image" src="venice.jpg" alt="" >
                  <div class="img-overlay img-overlay--blur">
                     <div class="img-title">- venice -</div>
                     <p class="img-desc">Timeless and magical, the soul of Venice is made up of 118 islands united together by more than 400 bridges, separated by canals that act as waterways, forever bustling with gondolas and boats in a never-ending back-and-forth.</p>
                  </div>
                 </div>
                  <a href="#destination"><i class="fa fa-map-marker" style="font-size:35px;color:rgb(198, 22, 22)"></i></a><span>venice</span>
                  <h3>italy</h3>
               </div>
 
 
               <div class="box">
                 <div class="image--img">
                  <img class="image" src="siagroisland,taktakfalls.jpg" alt="" >
                  <div class="img-overlay img-overlay--blur">
                     <div class="img-title">- siagro island -</div>
                     <p class="img-desc">TakTak Falls is a mesmerizing waterfall located in the far north of Siargao Island. Surrounded by lush greenery and pristine natural beauty, this enchanting waterfall is a sight to behold. The name "TakTak" is derived from the local dialect, which means "to drip," perfectly describing the cascading water that gently drips down the rocks.</p>
                  </div>
                 </div>
                  <a href="#destination"><i class="fa fa-map-marker" style="font-size:35px;color:rgb(198, 22, 22)"></i></a><span>taktak falls</span>
                  <h3>phillippines</h3>
               </div>
 
               <div class="box">
                 <div class="image--img">
                  <img class="image" src="barcelona.jpg" alt="" >
                  <div class="img-overlay img-overlay--blur">
                     <div class="img-title">- barcelona cathedral -</div>
                     <p class="img-desc">Barcelona Cathedral is the seat of the Archbishop of Barcelona and a stunning example of Gothic architecture as well as a historic cathedral constructed from the 13th to 20th centuries. Its formal name is the Cathedral of the Holy Cross and Saint Eulalia.</p>
                  </div>
                 </div>
                  <a href="#destination"><i class="fa fa-map-marker" style="font-size:35px;color:rgb(198, 22, 22)"></i></a><span>barcelona cathedral</span>
                  <h3>spain</h3>
               </div>
 
               <div class="box">
                 <div class="image--img">
                  <img class="image" src="indonesia.jpg" alt="" >
                  <div class="img-overlay img-overlay--blur">
                     <div class="img-title">- diamond beach -</div>
                     <p class="img-desc">Diamond Beach is a stunning hidden beach located at the bottom of a sheer cliff on the eastern tip of the island of Nusa Penida. A hidden beach, silky blue water, limestones, incredible stairway and palm trees are creating a dream destination. </p>
                  </div>
                 </div>
                  <a href="#destination"><i class="fa fa-map-marker" style="font-size:35px;color:rgb(198, 22, 22)"></i></a><span>diamond beach</span>
                  <h3>indonesia</h3>
               </div>
 
               <div class="box">
                 <div class="image--img">
                  <img class="image" src="pariss.jpg" alt="" >
                  <div class="img-overlay img-overlay--blur">
                     <div class="img-title">- paris -</div>
                     <p class="img-desc">An object of discord, desire and fascination, the Eiffel offers breathtaking views of the City of Lights and its several landmarks including the Seine River, the Grand Palace, the Louvre, Montmartre, and the Notre-Dame de Paris.</p>
                  </div>
                 </div>
                  <a href="#destination"><i class="fa fa-map-marker" style="font-size:35px;color:rgb(198, 22, 22)"></i></a><span>paris</span>
                  <h3>france</h3>
               </div>
 
               <div class="box">
                 <div class="image--img">
                  <img class="image" src="mykonosgreece.jpg" alt="" >
                  <div class="img-overlay img-overlay--blur">
                     <div class="img-title">- mykonos -</div>
                     <p class="img-desc">Mykonos is the Greek Island for pulsing nightlife and upscale beach clubs. Its name conjures up images of bright white windmills, turquoise skies, and tanned bodies lining golden sandy beaches. As the most popular Greek Island in the Aegean Sea, Mykonos has high energy that attracts a diverse and upscale crowd who thrive on its dance-till-dawn nightlife.</p>
                  </div>
                 </div>
                  <a href="#destination"><i class="fa fa-map-marker" style="font-size:35px;color:rgb(198, 22, 22)"></i></a><span>mykonos</span>
                  <h3>greece</h3>
               </div>
 
               <div class="box">
                 <div class="image--img">
                  <img class="image" src="blogalmaficoastitaly.jpg" alt="" >
                  <div class="img-overlay img-overlay--blur">
                     <div class="img-title">- almafi coast -</div>
                     <p class="img-desc">The Amalfi Coast is a magnet for honeymooners, artists, and anyone who wants to sample “la dolce vita.” Stretching along the southern side of Italy's Sorrentine Peninsula, the coast dazzles with its dramatic grottos, craggy cliffs, and shimmering bays. Soak up views on the jaw-droppingly beautiful route from artsy Positano to Amalfi. </p>
                  </div>
                 </div>
                  <a href="#destination"><i class="fa fa-map-marker" style="font-size:35px;color:rgb(198, 22, 22)"></i></a><span>almafi coast</span>
                  <h3>italy</h3>
               </div>
 
               <div class="box">
                 <div class="image--img">
                  <img class="image" src="lofotennor.jpg" alt="" >
                  <div class="img-overlay img-overlay--blur">
                     <div class="img-title">- Lofoten Islands -</div>
                     <p class="img-desc">Lofoten Islands, one of the most appealing destinations in the world. Located just above the Arctic Circle, at the 68th northern parallel, Lofoten basks in the ethereal Midnight Sun during summer and witnesses the magical Northern Lights from September to April.</p>
                  </div>
                 </div>
                  <a href="#destination"><i class="fa fa-map-marker" style="font-size:35px;color:rgb(198, 22, 22)"></i></a><span>lofoten islands</span>
                  <h3>norway</h3>
               </div>
 
               <div class="box">
                 <div class="image--img">
                  <img class="image" src="blog7.jpg" alt="" >
                  <div class="img-overlay img-overlay--blur">
                     <div class="img-title">- bali -</div>
                     <p class="img-desc">Bali appeals through its sheer natural beauty of looming volcanoes and lush terraced rice fields that exude peace and serenity. Bali enchants with its dramatic dances and colorful ceremonies, its arts, and crafts, to its luxurious beach resorts and exciting nightlife.</p>
                  </div>
                 </div>
                  <a href="#destination"><i class="fa fa-map-marker" style="font-size:35px;color:rgb(198, 22, 22)"></i></a><span>bali</span>
                  <h3>indonesia</h3>
               </div>
 
               <div class="box">
                 <div class="image--img">
                  <img class="image" src="nycc.jpg" alt="" >
                  <div class="img-overlay img-overlay--blur">
                     <div class="img-title">- new york -</div>
                     <p class="img-desc">Epicenter of the arts. Architectural darling. Dining and shopping capital. Trendsetter. New York City wears many crowns, and spreads an irresistible feast for all. New York City is at the center of things in the United States, or “mother city.” It is the single place that most encompasses all the shades of the American experience.  </p>
                  </div>
                 </div>
                  <a href="#destination"><i class="fa fa-map-marker" style="font-size:35px;color:rgb(198, 22, 22)"></i></a><span>new york city</span>
                  <h3>USA</h3>
               </div>
 
              
 
             </div>
 
             
     </section>
 
     <section class="reviews" id="reviews">
         <div class="container">
             <!-- <h4 class="label">Reviews</h4> -->
             <h2 class="heading">what our clients say</h2>
             <p class="paragraph">
                 Testimonials from our esteemed and loyal clients
             </p>
         </div>
 
         <div class="voices">
             <div class="voice">
                 <div class="profile">
                     <img src="person8.jpg" alt="" width="100px"> 
                     <div class="detail">
                         <li>megan fox</li>
                         <li>traveler</li>
                         <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         </div>
                     </div>
                 </div>
                 <p>“Booking through you was very easy and made our lives so much easier. I have nothing bad to say! Thank you for giving us tips and guidance before we left on what to bring and such, that was very helpful! Thanks again."</p>
             </div>
 
             <div class="voice">
                 <div class="profile">
                     <img src="person4.jpg" alt="" width="100px">
                     <div class="detail">
                         <li>oscar isaac</li>
                         <li>traveler</li>
                         <div class="stars">
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="far fa-star"></i>
                             </div>
                     </div>
                 </div>
                 <p>“travillia was great with the entire process from planning to updates during the trip. We had 11 people and everything was perfectly executed. We appreciate all of your hard work. It was truly the trip of a lifetime. Thank you!”</p>
             </div>
 
             <div class="voice">
                 <div class="profile">
                     <img src="person2.jpg" alt="" width="100px">
                     <div class="detail">
                         <li>henry cavill</li>
                         <li>traveler</li>
                         <div class="stars">
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                         </div>
                     </div>
                 </div>
                 <p>“Thankyou so much for the professional way you handled the booking for our recent family holiday to Indonesia. We had an amazing holiday, From start to finish your team made the process so effortless and could not have done more. We will defibarely use your company again and would not hesitate in recomnending you to friends and family. Once again ,Thankyou.”</p>
             </div>
 
             <div class="voice">
                 <div class="profile">
                     <img src="person6.jpg" alt="" width="100px">
                     <div class="detail">
                         <li>jennifer lawrence</li>
                         <li>traveler</li>
                         <div class="stars">
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                         </div>
                     </div>
                 </div>
                 <p>“your service was quick and very clear in managing our travel details. All documents and acknowlegments of travel came through in a very timely response. Definately would book through this company again.”</p>
             </div>
 
             <div class="voice">
                 <div class="profile">
                     <img src="person7.jpg" alt="" width="100px">
                     <div class="detail">
                         <li>adriana lima</li>
                         <li>traveler</li>
                         <div class="stars">
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                         </div>
                     </div>
                 </div>
                 <p>“The service was very efficient...and cheapest at the time! It was great to be able to book a room on the spot and know it was actually there. I was most impressed with the free voucher to Semara Spa - I wasn't prepared for anything even remotely as wonderful as the massage my Mum and I enjoyed. Thank you - I would certainly book with Travillia again if I could be assured of another of those massages!!!!”</p>
             </div>
 
             <div class="voice">
                 <div class="profile">
                     <img src="person3.jpg" alt="" width="100px">
                     <div class="detail">
                         <li>cillian murphy</li>
                         <li>traveler</li>
                         <div class="stars">
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                         </div>
                     </div>
                 </div>
                 <p>"Have been using the services of the Travillia for years and they never fail to deliver an excellent service. The service is always of high standard and the travel arrangement are such that we could forget about those and enjoy what is truly important: the new experiences, culture, food and peoples of the visited places. ”</p>
             </div>
             
 
             <div class="voice">
                 <div class="profile">
                     <img src="person10.jpg" alt="" width="100px">
                     <div class="detail">
                         <li>julio peña</li>
                         <li>traveler</li>
                         <div class="stars">
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                         </div>
                     </div>
                 </div>
                 <p>"Overall a very good service.  Overseas agents used were excellent (highly efficient, prompt friendly and personable).  Our selection of local guides were of a high standard with excellent knowledge. The selection of hotels were well thought through and the overall itinerary blended together perfectly.  We would definately use travillia again in the future."</p>
             </div>
 
             <div class="voice">
                 <div class="profile">
                     <img src="person9.jpg" alt="" width="100px">
                     <div class="detail">
                         <li>theo james</li>
                         <li>traveler</li>
                         <div class="stars">
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="far fa-star"></i>
                         </div>
                     </div>
                 </div>
                 <p>"Amazing service. We used Jonny Livingstone to plan our honeymoon to Peru and the itinerary was amazing with every detail taken care off. We had the most special, stress free trip thanks to Jonny. Would 100% recommend!"</p>
             </div>
 
 
         </div>
     </section>
 
     
 
 
  <!--destination section-->
  <section class="destinations" id="destination"> 
    <h4 class="label">Top Destinations</h4>
    <div class="container"> 
        <div class="container-box">
            <h2 class="heading">Adventure is out there! Go find it</h2>
            <div class="content">
             <p>With each step we take, we discover new perspectives, forge meaningful connections, and create cherished memories that last a lifetime. </p>
             <a href="#packages">explore more <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="gallerys">
            <div class="box">
                <img src="Italy (2).jpg" alt="">
                <div class="text">
                    <h2>Italy</h2>
                </div>
            </div>
            <div class="box">
                <img src="Spain.jpg" alt="">
                <div class="text">
                    <h2>Spain</h2>
                </div>
            </div>
            <div class="box">
                <img src="Greece (2).jpg" alt="">
                <div class="text">
                    <h2>Greece</h2>
                </div>
            </div>
            <div class="box">
                <img src="Scotland.jpg" alt="">
                <div class="text">
                    <h2>Scotland</h2>
                </div>
            </div>
            <div class="box">
                <img src="Indonesia (2).jpg" alt="">
                <div class="text">
                    <h2>Indonesia</h2>
                </div>
            </div>
            <div class="box">
                <img src="Norway.jpg" alt="">
                <div class="text">
                    <h2>Norway</h2>
                </div>
            </div>
            <div class="box">
                <img src="Philippines.jpg" alt="">
                <div class="text">
                    <h2>Philippines</h2>
                </div>
            </div>
            <div class="box">
                <img src="USA.jpg" alt="">
                <div class="text">
                    <h2>USA</h2>
                </div>
            </div>
            <div class="box">
                <img src="France.jpg" alt="">
                <div class="text">
                    <h2>France</h2>
                </div>
            </div>
            <div class="box">
                <img src="England.jpg" alt="">
                <div class="text">
                    <h2>England</h2>
                </div>
            </div>
        </div>
    </div>
  </section>

   <!-- packages section -->
    <section class="packages" id="packages">
        <h5 class="label">Packages</h5>
        <div class="cont">
            <div class="cont-box">
                <h2 class="heading">Adventure awaits!</h2>
                <div class="breif">
                    <p>Roam free, wanderlust seeker</p>
                    <a href="#">package<i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="landmarks">
                <div class="box">
                    <img src="Palawan.jpg" alt="">
                    <div class="text">
                        <h2><i class="material-icons">place</i>ELNido,Palawan-philippines </h2>
                        <p>Big Lagoon</p>
                        <div class="stars">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                        </div>
                        <div class="price">50$ per adult</div>
                        <a href="index.php" class="book"><button>book now</button></a>
                        
                    </div>
                </div>
                <div class="box">
                    <img src="Tromso.jpg" alt="">
                    <div class="text">
                        <h2><i class="material-icons">place</i>Tromso-Norway</h2>
                        <p>The Aurora Borealis</p>
                        <div class="stars">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                        </div>
                        <div class="price">220$ per adult</div>
                        <a href="index.php" class="book"><button>book now</button></a>
                    </div>
                </div>
                <div class="box">
                    <img src="Vadhoo Island.jpg" alt="">
                    <div class="text">
                        <h2><i class="material-icons">place</i>Vaadhoo Island-Maldives</h2>
                        <p>Glowing Beach</p>
                        <div class="stars">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                        </div>
                        <div class="price">150$ per adult</div>
                        <a href="index.php" class="book"><button>book now</button></a>
                    </div>
                </div>
                <div class="box">
                    <img src="Vence.jpg" alt="">
                    <div class="text">
                        <h2><i class="material-icons">place</i>Vence-Italy</h2>
                        <p>Gondola Ride</p>
                        <div class="stars">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                        </div>
                        <div class="price">55$ per adult</div>
                        <a href="index.php" class="book"><button>book now</button></a>
                    </div>
                </div>
                <div class="box">
                    <img src="Santorini.jpg" alt="">
                    <div class="text">
                        <h2><i class="material-icons">place</i>Oia,Santorini-greece</h2>
                        <p>Sunset IN Oia</p>
                        <div class="stars">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                        </div>
                        <div class="price">70$ per adult</div>
                        <a href="index.php" class="book"><button>book now</button></a>
                    </div>
                </div>
                <div class="box">
                    <img src="madrid.jpg" alt="">
                    <div class="text">
                        <h2><i class="material-icons">place</i>Madrid-Spain</h2>
                        <p>Plaza De Cibeles</p>
                        <div class="stars">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                        </div>
                        <div class="price">90$ per adult</span></div>
                        <a href="index.php" class="book"><button>book now</button></a>
                    </div>
                </div>
                <div class="box">
                    <img src="Bali.jpg" alt="">
                    <div class="text">
                        <h2><i class="material-icons">place</i>Bali-Indonesia</h2>
                        <p>Gate Of Heaven</p>
                        <div class="stars">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                        </div>
                        <div class="price">130$ per adult</div>
                        <a href="index.php" class="book"><button>book now</button></a>
                    </div>
                </div>
                <div class="box">
                    <img src="Paris (2).jpg" alt="">
                    <div class="text">
                        <h2><i class="material-icons">place</i>Paris-France</h2>
                        <p>Louvre Museum</p>
                        <div class="stars">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                        </div>
                        <div class="price">50$ per adult</span></div>
                        <a href="index.php" class="book"><button>book now</button></a>
                    </div>
                </div>
                <div class="box">
                    <img src="Las Vegas.jpg" alt="">
                    <div class="text">
                        <h2><i class="material-icons">place</i>Las Vegas-USA</h2>
                        <p>The Sphere</p>
                        <div class="stars">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                        </div>
                        <div class="price">200$ per adult</div>
                        <a href="index.php" class="book"><button>book now</button></a>
                    </div>
                </div>
                <div class="box">
                    <img src="london.jpg" alt="">
                    <div class="text">
                        <h2><i class="material-icons">place</i>London-England</h2>
                        <p>Wax Museum</p>
                        <div class="stars">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                        </div>
                        <div class="price">50$ per adult</div>
                        <a href="index.php" class="book"><button>book now</button></a>
                    </div>
                </div>
                <div class="box">
                    <img src="Capital Of Scotland.jpg" alt="">
                    <div class="text">
                        <h2><i class="material-icons">place</i>Capital OF Scotland-Scotland</h2>
                        <p>Edinbrugh Castle</p>
                        <div class="stars">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                        </div>
                        <div class="price">150$ per adult</div>
                        <a href="index.php" class="book"><button>book now</button></a>
                    </div>
                </div>
                <div class="box">
                    <img src="hudson.jpg" alt="">
                    <div class="text">
                        <h2><i class="material-icons">place</i>New York-USA</h2>
                        <p>Edge At Hudson Yards</p>
                        <div class="stars">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                        </div>
                        <div class="price">50$ per adult</div>
                        <a href="index.php" class="book"><button>book now</button></a>
                    </div>
                </div>

                
            </div>
        </div>
    </section>  
 
 <section class="contact">
    <div class="content">
         <h2>Contact Us</h2>
         <p>We are able to replay within 24 hours. we work in weeekend also</p>            
    </div>
     <div class="container">
        <div class="contactInfo"> 
           <div class="box">
             <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
             <div class="text">
               <h3>Address</h3>
              <p> 15<br>Tahrir Square<br> Cairo</p> 
             </div>
           </div>
           <div class="box">
               <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></i></div>
               <div class="text">
               <h3>Phone</h3>
               <p>01222950498</p>
               </div>
            </div>
               <div class="box">
                   <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                   <div class="text">
                   <h3>Email</h3>
                   <p>WWW.travillia.com</p>
                   </div>
               </div>
        </div>
        <div class="contactForm">
           <form action="review.php" method="POST">
                 <h2>Send Message</h2>
                  <div class="inputBox">
                    <input type="text" name="fullname" required="required">
                      <span>Full Name</span>
                  </div>
              <div class="inputBox">
                 <input type="text" name="email" required="required">
                    <span>Email</span>
              </div>
              <div class="inputBox">
                <input type="text" name="message" required="required">
                 <span>Type your Message...</span>
              </div>
              <div class="inputBox">
                <input type="submit" name="" value="Send">
              </div>
          </form>
    </div>

</section>
 
 
 
<section class="about" id="about">
    <div class="image">
      <img src="wall10.jpg" alt=""/>
    </div>
    <div class="content">
      <h3>why choose Travillia?</h3>
      <p>Travillia, the ultimate resource for those passionate about travel and tourism. Our platform provides extensive guides to the world’s most renowned tourist destinations, ensuring you have all the information you need for a memorable journey. At Travillia, we are dedicated to making your travel dreams a reality with a touch of elegance and ease.   
      </p>
          <div class="icon-container">
            <div class="icon">
              <i class="fas fa-map"></i>
                <span>Top destinations</span>
            </div>
            <div class="icon">
              <i class="fas fa-hand-holding-usd"></i>
                <span>Affordable price</span>
            </div>
            <div class="icon">
              <i class="fas fa-headset"></i>
                <span>24/7 guide service</span>
            </div>
          </div>
    </div>
  </section>
  <!-- About End -->
 
 
 <!-- <a href="#back-to-top" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->
 <!-- <button onclick="scrollToTop()" id="btnScrollToTop" title="Go to top">Top</button> -->
 <button onclick="scrollToTop()" id="btnScrollToTop" title="Go to top"><span>&#8679;</span> </button>
 
 </button>
 <footer class="footer">
    <div class="container">
        <div class="row">

            <div class="footer-col">
                <h4>company</h4>
                <ul>
                    <li><a href='#'>about us</a></li>
                    <li><a href='#'>our services</a></li>
                    <li><a href='#'>privacy policy</a></li>
                    <li><a href='#'>affiliate program</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>get help</h4>
                <ul>
                    <li><a href='#'>FAQ</a></li>
                    <li><a href='#'>prices</a></li>
                    <li><a href='#'>returns</a></li>
                    <li><a href='#'>booking status</a></li>
                    <li><a href='#'>payment options</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>contact info</h4>
                <ul>
                    <li><a href='#'>01222950498</a></li>
                    <li><a href='#'>WWW.travillia.com</a></li>
                    <li><a href='#'>15 Tahrir Square, Cairo</a></li>
                    <li><a href='#'>travillia@gmail.com</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href='#'><i class='fa fa-facebook'></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>

            <!-- <div class="footer-col">
                <div class="voice">
                    <div class="profile">
                       <h4>founders</h4>
                       <img src="me.jpg">
                       <div class="detail">
                         <li>habiba</li>
                         <li>traveler</li>
                       </div>
                    </div>
                </div>
            </div>
  -->
            
        </div>
    </div>
 </footer>
 
 
 
 </body>
 </html>