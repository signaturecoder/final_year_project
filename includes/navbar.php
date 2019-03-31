<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
 <a class="btnspl"></a>
 <a class="navbar-brand" href="index.php">
   <div class="row">
     <div class="col-xs-4"> <img src="img/technoLogo1.png" alt="techno logo" width="35px"></div>
     <div class="col-xs-8"> CMS Blog </div>  
   </div>
 </a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <!--       Navigation Lists-->
  <ul class="navbar-nav ml-auto">


    <li class="nav-item">
      <a class="nav-link" href="admin/admin_login.php"><i class="fas fa-users"></i> Admin </a>
    </li>

    <li class="nav-item active">
      <a class="nav-link  " href="index.php"><i class="fa fa-home"></i>
       Home <span class="sr-only">(current)</span></a>
     </li>

     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle  " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-list-alt"></i>
       Categories
     </a>
     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
       <?php
                $query = "SELECT * FROM categories ORDER BY id DESC"; // latest will be on top 
                $run = mysqli_query($con,$query);
                if(mysqli_num_rows($run) > 0)
                {
                  while($row = mysqli_fetch_array($run))
                  {
                        $category =ucfirst($row['category']);  //category is column name in database
                        $id = $row['id'];
                        echo " <a class='dropdown-item' href='index.php?cat=".$id."'>$category</a>";
                      }
                    }
                    else
                    {
                      echo " <a class='dropdown-item' href='#'>No Categories Yet</a>";
                    }


                    ?>
                  </div>
                </li>


                <li class="nav-item">
                  <a class="nav-link  " href="contact-us.php"><i class="fas fa-users"></i> Contact Us</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="login.php" ><i class="fas fa-sign-in-alt"></i> login</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="signup.php" ><i class="fas fa-sign-in-alt"></i> signup</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link  " href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </li>



              </ul>
              <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form> -->

            </div>
          </nav>