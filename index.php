<?php
    session_start();
    $conn =mysqli_connect('localhost','root','','skill');
    if($conn)
    {
        ?>
          <script>
              //alert("Db connected");
          </script>
        <?php
    }
    else
    {
      ?>
      <script>
          ("Db connection error");
      </script>
    <?php
    }

    
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>CLOUD</title>
    <style>
      body
      {
        background-image: linear-gradient(to right, #ff0dff, #00e7ef, #ff06d5, #00e7ef, #ff0dff);
      }
      .banner
      {
        
        
      }
    </style>
  </head>
  <body>
      <nav class="navbar navbar-light bg-transparent">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="https://chinmayakumarbiswal.in/favicon.ico" alt="" width="30" height="24">
            CHINMAYA
          </a>
          <form class="d-flex" id>
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#logme">
              Login
            </button>
            
          </form>
        </div>
      </nav>



      <!-- Modal -->
      <div class="modal fade" id="logme" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Login</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
              <div class="modal-body">
                <div class="mb-3">
                  <label for="formGroupExampleInput" class="form-label">Email </label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="situ@chinmayakumarbiswal.in" name="emailin">
                </div>
                <div class="mb-3">
                  <label for="formGroupExampleInput2" class="form-label">Password</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="password" name="passin">
                </div>
              </div>
              <div class="modal-footer">
                <input type="submit" class="btn btn-info" value="Login" name="loginto" />
              </div>
            </form>
              <?php
                if(isset($_POST['loginto']))
                  {
                      $umail=mysqli_real_escape_string($conn, $_POST['emailin']);
                      $pwd=mysqli_real_escape_string($conn, $_POST['passin']);
                      //$pawd= md5($pwd);
                      echo "$umail";
                      $query="SELECT * FROM userdt WHERE email='$umail' && pass='$pwd'";
                      $data=mysqli_query($conn, $query);
                      $total=mysqli_num_rows($data);
                      if($total==1)
                      {
                        $_SESSION['usrid'] = $umail;
                        
                        session_write_close();
                          header('location:dash.php');
                      }
                      else
                      {
                          ?>
                              <script>
                                  alert("login error");
                              </script>
                          <?php
                      }
                  }  
              ?>

            
          </div>
        </div>
      </div>





      <main>
        <section class="banner">
            <div class="container">
                <div class="row full-screen align-items-center">
                    <div class="col-lg-7">
                        <div class="box">
                            <h2>Skill in Odisha</h2>
                            <h3>Odisha's Best</h3>
                            <h3>World's Next</h3>
                            
                            <p class="desc">
                                Hello! i'm Chinmaya Kumar Biswal a student and a fontend web developer. Studied Cloud Technology And Information Security at Centurion University of Technology and Management with an interest in System Admin and Web development.
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="me" style="background-image:url(situ.png);"></div>
        </section>
    </main>



  </body>
</html>
