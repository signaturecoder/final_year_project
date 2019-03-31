<?php
    include "includes/db.php";
?>

<?php include 'includes/header.php';?>
</head>
<body>
    <!--     Navigation Bar , Toggle Button -->
    <nav class="navbar navbar-expand-lg navbar-light  fixed-top bg-white">
     <div class="container">
     <a class="navbar-brand" href="index.php">
     <div class="row">
       <div class="col-xs-4"> <img src="img/technoLogo1.png" alt="techno logo" width="35px"></div>
       <div class="col-xs-8"> CMS Blog</div>  
     </div>
     </a>
     
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria- controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
     </button>

      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        
        <!--       Navigation Lists-->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link " href="index.php"><i class="fa fa-home"></i>
                 Home <span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle  " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-list-alt"></i>
               Categories
              </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Category 1</a>
              <a class="dropdown-item" href="#">Category 2</a>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link  " href="contact-us.php"><i class="fas fa-users"></i> Contact Us</a>
          </li>
          
        </ul>
        <!--        Navigation Lists End-->
      </div>
     </div>
    </nav>
              
        <!--        Description Bar-->
               <div class="jumbotron">
                      <div class="container">
                          <div id="details" class="animated fadeInLeft">
                           <h1>Contact<span>Us</span></h1>
                           <p>We are available 24*7. So Feel Free to Contact Us.</p>
                       </div>
                       <img src="img/banner9.jpg" alt="top-image">
                      </div>
                       
               </div>
               
    <!--   Section Started            -->
    <section>
        <div class="container">
            <div class="row">
               
                <!--      Map started-->
                <div class="col-md-8">
                 <div class="row">
                     <div class="col-md-12">
                         <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyB7PnzDXQq9FYelinb54LbwRGO58WY06bg'></script><div style='overflow:hidden;height:400px;width:100%;'><div id='gmap_canvas' style='height:400px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://embedmap.org/'>google map for my website</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=1ee8c0fbe389d69d4841076c5db67e0e1f0a2671'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(22.5735314,88.43311889999995),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(22.5735314,88.43311889999995)});infowindow = new google.maps.InfoWindow({content:'<strong>Techno India</strong><br>Salt Lake Sector 5<br>700091 Kolkata<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                     </div>
                     <div class="col-md-12 contact-form bg-white py-4 ">
                        <h2>Contact form</h2><hr>
                         <form action="">
                             <div class="form-group">
                                 <label for="full-name">Full Name:</label>
                                 <input type="text" id="full-name" class="form-control" placeholder="Full Name">
                             </div>
                             
                             <div class="form-group">
                                 <label for="email">Email:</label>
                                 <input type="text" id="email" class="form-control" placeholder="Email Address" required>
                             </div>
                             
                             <div class="form-group">
                                 <label for="website">Website:</label>
                                 <input type="text" id="website" class="form-control" placeholder="Website">
                             </div>
                             
                             <div class="form-group">
                                 <label for="message">Message:</label>
                                 <textarea  id="message" cols="30" rows="10" class="form-control" placeholder="Your Message Should Be Here"></textarea>
                             </div>
                             
                             <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                             
                         </form>
                     </div>
                 </div>
                   
                </div>
                
                <!-- Side Posts        -->
                <div class="col-md-4">
                <div class="widgets">
                <!--     Search bar -->
                  <div class="input-group md-form form-sm form-2 pl-0">
                      <input class="form-control my-0 py-1 lime-border" type="text" placeholder="Search" aria-label="Search">
                      <div class="input-group-append">
                        <span class="input-group-text lime lighten-2" id="basic-text1"><i class="fas fa-search text-grey"
                            aria-hidden="true"></i></span>
                      </div>
                  </div>  
                <!--  Search Bar Ended-->
                </div> <!-- Widgets closed -->
                
                <!--    Posts Started-->
                    <div class="widgets">
                    <div class="popular">
                       <h4>Popular Posts</h4>
                       <hr>
                        <div class="row">
                            <div class="col-xs-4">
                               <a href=""><img src="img/call.png" alt="image side"></a> 
                            </div>
                            <div class="col-xs-8 details">
                                <a href=""><h4>This is heading for post</h4></a>
                                <p> 13 febubrary,2018</p>
                            </div>
                        </div>
                        
                       <hr>
                        <div class="row">
                            <div class="col-xs-4">
                               <a href=""><img src="img/call.png" alt="image side"></a> 
                            </div>
                            <div class="col-xs-8 details">
                             <a href=""><h4>This is heading for post</h4></a>
                                <p><i class="fa fa-clock-o"></i>13 febubrary,2018</p>
                            </div>
                        </div>
                        
                       <hr>
                        <div class="row">
                            <div class="col-xs-4">
                              <a href=""><img src="img/call.png" alt="image side"></a> 
                            </div>
                            <div class="col-xs-8 details">
                             <a href=""><h4>This is heading for post</h4></a>
                                <p><i class="fa fa-clock-o"></i>13 febubrary,2018</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- Widgets closed -->
                
                 <div class="widgets">
                    <div class="popular">
                       <h4>Recent Posts</h4>
                       <hr>
                        <div class="row">
                            <div class="col-xs-4">
                               <a href=""><img src="img/call.png" alt="image side"></a> 
                            </div>
                            <div class="col-xs-8 details">
                                <a href=""><h4>This is heading for post</h4></a>
                                <p><i class="fa fa-clock-o"></i>13 febubrary,2018</p>
                            </div>
                        </div>
                        
                       <hr>
                        <div class="row">
                            <div class="col-xs-4">
                               <a href=""><img src="img/call.png" alt="image side"></a> 
                            </div>
                            <div class="col-xs-8 details">
                             <a href=""><h4>This is heading for post</h4></a>
                                <p><i class="fa fa-clock-o"></i>13 febubrary,2018</p>
                            </div>
                        </div>
                        
                       <hr>
                        <div class="row">
                            <div class="col-xs-4">
                              <a href=""><img src="img/call.png" alt="image side"></a> 
                            </div>
                            <div class="col-xs-8 details">
                             <a href=""><h4>This is heading for post</h4></a>
                                <p><i class="fa fa-clock-o"></i>13 febubrary,2018</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- Widgets closed -->
                
                
                 <div class="widgets">
                   <div class="popular">
                       <h4>Categories</h4>
                       <hr>
                        <div class="row">
                        <div class="col-xs-6">
                            <ul>
                                <li><a href="">category</a></li>
                                <li><a href="">category</a></li>
                                <li><a href="">category</a></li>
                                <li><a href="">category</a></li>
                                <li><a href="">category</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-6">
                            <ul>
                                <li><a href="">category</a></li>
                                <li><a href="">category</a></li>
                                <li><a href="">category</a></li>
                                <li><a href="">category</a></li>
                                <li><a href="">category</a></li>
                            </ul>
                        </div>
                    </div>
                    </div>   
                </div> <!-- Widgets closed -->
                
                 
                 <div class="widgets">
                   <div class="popular">
                    <!--    Social Icons       -->
                        <h4>Social Icons</h4>
                        <hr>
                        <div class="row">
                            <div class="col-xs-4" px><a href=""><img src="img/facebookIcon.png" alt="Facebook" class="img-thumbnail"></a></div>
                            <div class="col-xs-4" px><a href=""><img src="img/instalogo.jpg" alt="Instagram" class="img-thumbnail"></a></div>
                            <div class="col-xs-4" px><a href=""><img src="img/twitterIcon.png" alt="Twitter" class="img-thumbnail"></a></div>
                        </div>
                        
                        <hr>
                        <div class="row">
                            <div class="col-xs-4" px><a href=""><img src="img/google+Icon.png" alt="Facebook" class="img-thumbnail"></a></div>
                            <div class="col-xs-4" px><a href=""><img src="img/gmailIcon.png" alt="Instagram" class="img-thumbnail"></a></div>
                            <div class="col-xs-4" px><a href=""><img src="img/skypeIcon.png" alt="Twitter" class="img-thumbnail"></a></div>
                        </div>

                    </div>
                    </div>   
                </div> <!-- Widgets closed -->
                
                </div>
            </div>
    </section>
   <?php include 'includes/script.php';?> 
   <?php include 'includes/footer.php';?>
   
