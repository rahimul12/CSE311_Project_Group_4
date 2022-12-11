<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetMovieTickets  Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
      
      <a class="navbar-brand" href="index.php"><img src="image/ICON_04.png" width="150" height="40" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <ul></ul>
          <ul></ul>
          <ul></ul>
          <ul></ul>
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup.php">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
         
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search for Movies" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
   <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
        </div>
      </nav>
   <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
        </div>
      </nav>
   </header>

   <main>
       <h1 class="text-center mt-2 mb-2 fw-bold">Recent <span class="text-danger">Hot</span> Release</h1>
   <section class="container mt-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/carousel-pic/RRR-8-322x402.jpg" class="d-block w-100" alt="..." style="height:500px;">
          </div>
          <div class="carousel-item">
            <img src="image/carousel-pic/kgf-2-2235021.jpg" class="d-block w-100" alt="..." style="height:500px;">
          </div>
          <div class="carousel-item">
            <img src="image/carousel-pic/the batman.jpg" class="d-block w-100" alt="..." style="height:500px;">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
   </section>
   <section class="container mt-5"> 
       <h4 class="text-center">Now <span class="text-danger mb-5">Showing</span></h4>
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
        <div class="col">
          <div class="card">
            <img src="image/carousel-pic/RRR-8-322x402.jpg" class="card-img-top img-fluid rounded" alt="...">
            <div class="card-body">
              <h5 class="card-title">
              <!-- modal trigger -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                RRR
                </button>


                <!-- modal body -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <img src="image/carousel-pic/RRR-8-322x402.jpg" class="w-50" alt="">
                        <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                      </div>
                      <div class="modal-body">
                        <h5>RRR   ★★★★☆</h5>
                        <p>Rise Roar Revolt (2022) : A fictional history of two legendary revolutionaries journey away from home before they began fighting for their country in the 1920s.</p>
                        <p>Dirrector: S.S. Rajamouli</p>
                        <p>Main cast: N.T.R Junior, Ram Charan, Alia Bhatt, Ajay Devgun</p>
                        <h3>Sign Up or Login to Book Tickets</h3>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary"><a href="login.php" style="text-decoration: none; color: white;">Login</a></button>
                      </div>
                    </div>
                  </div>
                </div>
              
              
              </h5>
              
              <p class="card-text">Rise Roar Revolt (2022) : A fictional history of two legendary revolutionaries journey away from home before they began fighting for their country in the 1920s.</p>
             
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="image/carousel-pic/kgf-2-2235021.jpg" class="card-img-top img-fluid rounded" alt="...">
            <div class="card-body">
              <h5 class="card-title">
              <!-- modal trigger -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                K.G.F: Chapter 2
                </button>


                <!-- modal body -->
                <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <img src="image/carousel-pic/kgf-2-2235021.jpg" class="w-50" alt="">
                        <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                      </div>
                      <div class="modal-body">
                        <h5></hK.G.F: Chapter 25>
                          <h5>K.G.F: Chapter 2   ★★★★☆</h5>
                        <p>The blood-soaked land of Kolar Gold Fields (KGF) has a new overlord now – Rocky, whose name strikes fear in the heart of his foes. His allies look up to Rocky as their Savior, the government sees him as a threat to law and order; enemies are clamoring for revenge and conspiring for his downfall. Bloodier battles and darker days await as Rocky continues on his quest for unchallenged supremacy.</p>
                        <h3>Sign Up or Login to Book Tickets</h3>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary"><a href="login.php" style="text-decoration: none; color: white;">Login</a></button>
                      </div>
                    </div>
                  </div>
                </div>
              
              
              </h5>
              
              <p class="card-text">KGF 2 (2022) : The blood-soaked land of Kolar Gold Fields (KGF) has a new overlord now – Rocky, whose name strikes fear in the heart of his foes. His allies look up to Rocky...</p>
             
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="image/carousel-pic/the batman.jpg" class="card-img-top img-fluid rounded" alt="...">
            <div class="card-body">
              <h5 class="card-title">
              <!-- modal trigger -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                The Batman
                </button>


                <!-- modal body -->
                <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <img src="image/carousel-pic/the batman.jpg" class="w-50" alt="">
                        <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                      </div>
                      <div class="modal-body">
                        <h5>The Batman (2022)    ★★★☆☆</h5>
                        <p>In his second year of fighting crime, Batman uncovers corruption in Gotham City that connects to his own family while facing a serial killer known as the Riddler.</p>
                        <h3>Sign Up or Login to Book Tickets</h3>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary"><a href="login.php" style="text-decoration: none; color: white;">Login</a></button>
                      </div>
                    </div>
                  </div>
                </div>
              
              
              </h5>
              
              <p class="card-text">In his second year of fighting crime, Batman uncovers corruption in Gotham City that connects to his own family while facing a serial killer known as the Riddler.</p>
             
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="image/carousel-pic/Spiderman no way home.jpg" class="card-img-top img-fluid rounded" alt="...">
            <div class="card-body">
              <h5 class="card-title">
              <!-- modal trigger -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
                  SpiderMan: No Way Home
                </button>


                <!-- modal body -->
                <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <img src="image/carousel-pic/Spiderman no way home.jpg" class="w-50" alt="">
                      </div>
                      <div class="modal-body">
                        <h5>SpiderMan: No Way Home    ★★★☆☆</h5>
                        <p>SpiderMan: No Way Home (2021) Peter Parker is unmasked and no longer able to separate his normal life from the high-stakes of being a super-hero. When he asks for help from Doctor Strange the stakes become even more dangerous, forcing him to discover what it truly means to be Spider-Man</p>
                        <h3>Sign Up or Login to Book Tickets</h3>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary"><a href="login.php" style="text-decoration: none; color: white;">Login</a></button>
                      </div>
                    </div>
                  </div>
                </div>
              
              
              </h5>
              
              <p class="card-text">SpiderMan: No Way Home (2021) Peter Parker is unmasked and no longer able to separate his normal life from the high-stakes of being a super-hero. When he asks for...</p>
             
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="image/carousel-pic/Pushpa.jpg" class="card-img-top img-fluid rounded" alt="...">
            <div class="card-body">
              <h5 class="card-title">
              <!-- modal trigger -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop5">
                  Pushpa: The Rise
                </button>


                <!-- modal body -->
                <div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <img src="image/carousel-pic/Pushpa.jpg" class="w-50" alt="">
                      </div>
                      <div class="modal-body">
                        <h5>Pushpa: The Rise    ★★★★☆</h5>
                        <p>Pushpa: The Rise – Part 1 (2021) Pushpa Raj is a coolie who rises in the world of red sandalwood smuggling. Along the way, he doesn’t shy from making an enemy or two.</p>
                        <h3>Sign Up or Login to Book Tickets</h3>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary"><a href="login.php" style="text-decoration: none; color: white;">Login</a></button>
                      </div>
                    </div>
                  </div>
                </div>
              
              
              </h5>
              
              <p class="card-text">Pushpa: The Rise – Part 1 (2021) Pushpa Raj is a coolie who rises in the world of red sandalwood smuggling. Along the way, he doesn’t shy from making an enemy or two.</p>
             
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="image/carousel-pic/Beast.jpg" class="card-img-top img-fluid rounded" alt="...">
            <div class="card-body">
              <h5 class="card-title">
              <!-- modal trigger -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop6">
                Beast
                </button>


                <!-- modal body -->
                <div class="modal fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <img src="image/carousel-pic/Beast.jpg" class="w-50" alt="">
                      </div>
                      <div class="modal-body">
                        <h5>Beast    ★★☆☆☆</h5>
                        <p>Raw (Beast) (2022) : A former RAW officer, who is among the hostages in a mall taken over by terrorists, has to foil their plans and prevent the government from releasing a dreaded terrorist, who he had helped put in prison at great personal cost.</p>
                        <h3>Sign Up or Login to Book Tickets</h3>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary"><a href="login.php" style="text-decoration: none; color: white;">Login</a></button>
                      </div>
                    </div>
                  </div>
                </div>
              
              
              </h5>
              
              <p class="card-text">Raw (Beast) (2022) : A former RAW officer, who is among the hostages in a mall taken over by terrorists, has to foil their plans and prevent the government from releasing ...</p>
             
            </div>
          </div>
        </div>
        
        
        
       
       
      </div>
   </section>
   <section class="container mt-5">
     <h4 class="text-center">About<span class="text-danger mb-5"> Us</span></h4>
    
    <p class="border border-5 p-10 mt-3 rounded">
     <p>GetMovieTickets is an online based platform where you can book tickets for your favorite movies, theatre. GetMovieTickets is a sample of real online movie tickets booking sides developed by Marufur Rashid,Rahimul Haque Afrad and Nafizur Rahman . It is developed by using Php, Html, CSS, Bootstrap and using xampp.
    </p>
    </p>
</section>
   </main>

   <footer class="bg-dark">
    <p class="text-center text-danger p-4">© All right reserverd. </p>
   </footer>





   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>