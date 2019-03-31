
                 <div class="widgets">
                <!--     Search bar -->
                     <form action="index.php" method="post" class="form-inline">
                            <input class="form-control mr-sm-3" type="text"  name="search-title" placeholder="Search" aria-label="Search" >
                            <span class="input-group-btn">
                                <input class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="search" value="Go">
                            </span>
                     </form>
                
                <!--  Search Bar Ended-->
                </div> <!-- Widgets closed -->
                
                <!--    Posts Started-->
              
                 <div class="widgets">
                    <div class="popular">
                       <h4>Popular Posts</h4>
                       <?php 
                        $p_query = "SELECT * FROM posts where status = 'publish' ORDER BY view DESC LIMIT 5";
                        $p_run = mysqli_query($con,$p_query);
                        if(mysqli_num_rows($p_run) > 0){
                            while($p_row = mysqli_fetch_array($p_run)){
                                    $p_id = $p_row['id'];
                                    $p_date = getdate($p_row['date']);
                                    $p_day = $p_date['mday'];
                                    $p_month = $p_date['month'];
                                    $p_year = $p_date['year'];
                                    $p_title = $p_row['title'];
                                    $p_image = $p_row['image'];
                                
                        ?>
                       <hr>
                        <div class="row">
                            <div class="col-xs-4">
                               <a href="post.php?post_id=<?php echo $p_id;?>"><img src="img/<?php echo $p_image;?>" alt="image 1"></a> 
                            </div>
                            <div class="col-xs-8 details">
                                <a href="post.php?post_id=<?php echo $p_id;?>"><h6><?php echo $p_title;?></h6></a>
                                <p><i class="fas fa-clock mr-1"></i><?php echo "$p_day $p_month $p_year";?></p>
                            </div>
                        </div>
                        <?php
                            }
                        }
                        else{
                            echo "<h3>No Post Available</h3>";
                        }
                        ?>
                    </div>
                </div> <!-- Widgets closed -->
                    
                            
                 <div class="widgets">
                    <div class="popular">
                       <h4>Recent Posts</h4>
                       <?php 
                        $p_query = "SELECT * FROM posts where status = 'publish' ORDER BY id DESC LIMIT 5";
                        $p_run = mysqli_query($con,$p_query);
                        if(mysqli_num_rows($p_run) > 0){
                            while($p_row = mysqli_fetch_array($p_run)){
                                    $p_id = $p_row['id'];
                                    $p_date = getdate($p_row['date']);
                                    $p_day = $p_date['mday'];
                                    $p_month = $p_date['month'];
                                    $p_year = $p_date['year'];
                                    $p_title = $p_row['title'];
                                    $p_image = $p_row['image'];
                                
                        ?>   
                        <!--   Closing php tag here-->
                        
                       <hr>
                        <div class="row">
                            <div class="col-xs-4">
                               <a href="post.php?post_id=<?php echo $p_id;?>"><img src="img/<?php echo $p_image;?>" alt="image 1"></a> 
                            </div>
                            <div class="col-xs-8 details">
                                <a href="post.php?post_id=<?php echo $p_id;?>"><h6><?php echo $p_title;?></h6></a>
                                <p><i class="fas fa-clock mr-1"></i><?php echo "$p_day $p_month $p_year";?></p>
                            </div>
                        </div>
                        <?php
                            }
                        }
                        else{
                            echo "<h3>No Post Available</h3>";
                        }
                        ?>
                    </div>
                </div> <!-- Widgets closed -->
                
                
                 <div class="widgets">
                   <div class="popular">
                       <h4>Categories</h4>
                       <hr>
                        <div class="row">
                        <div class="col-xs-6">
                            <ul>
                                <?php
                                $c_query = "SELECT * FROM categories";
                                $c_run = mysqli_query($con,$c_query);
                                //   echo "h1"; only for debugging purpose 
                              
                                if(mysqli_num_rows($c_run) > 0){
                                    $count = 2;
                                    while( $c_row = mysqli_fetch_array($c_run)){
                                        //   echo "h2"; only for debugging purpose 
                                        $c_id = $c_row['id'];
                                        $c_category = $c_row['category'];
                                        $count = $count + 1;
                                        if(($count % 2) == 1){
                                            echo "<li><a href='index.php?cat=".$c_id."'>".(ucfirst($c_category))."</a></li>";
                                    
                                        }
                                        
                                    }
                                }
                                else{
                                    echo "<p>No Category</p>";
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="col-xs-6">
                            <ul>
                                <?php
                                $c_query = "SELECT * FROM categories";
                                $c_run = mysqli_query($con,$c_query);
                                if(mysqli_num_rows($c_run) > 0){
                                    $count = 2;
                                    while( $c_row = mysqli_fetch_array($c_run)){
                                        $c_id = $c_row['id'];
                                        $c_category = $c_row['category'];
                                        $count = $count + 1;
                                        if(($count % 2) == 0){
                                            echo "<li><a href='index.php?cat=".$c_id."'>".(ucfirst($c_category))."</a></li>";
                                    
                                        }
                                        
                                    }
                                }
                                else{
                                    echo "<p>No Category</p>";
                                }
                                ?>
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
                            <div class="col-xs-4" px><a href="http://www.facebook.com"><img src="img/facebookIcon.png" alt="Facebook" class="img-thumbnail"></a></div>
                            <div class="col-xs-4" px><a href="http://www.instagram.com"><img src="img/instalogo.jpg" alt="Instagram" class="img-thumbnail"></a></div>
                            <div class="col-xs-4" px><a href="http://www.twitter.com"><img src="img/twitterIcon.png" alt="Twitter" class="img-thumbnail"></a></div>
                        </div>
                        
                        <hr>
                        <div class="row">
                            <div class="col-xs-4" px><a href="http://plus.google.com"><img src="img/google+Icon.png" alt="Googlr+" class="img-thumbnail"></a></div>
                            <div class="col-xs-4" px><a href="http://www.gmail.com"><img src="img/gmailIcon.png" alt="Gmail" class="img-thumbnail"></a></div>
                            <div class="col-xs-4" px><a href="http://www.skype.com"><img src="img/skypeIcon.png" alt="Skype" class="img-thumbnail"></a></div>
                        </div>

                    </div>
                    </div> <!-- Widgets closed --> 
               