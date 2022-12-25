<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
              <!-- <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link active" href="signup.php">Sign Up</a>
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
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Book your Seat!!!</h2>
                                <p class="text-white-50 mb-5">Please enter your information</p>
                                <form action="book.php" method="post">
                                
                                <div class="form-outline form-white mb-4">
                                    <input type="Name" id="typeNameX" class="form-control form-control-lg" name="typeNameX" />
                                    <label class="form-label" for="typeNameX">Name</label>
                                </div>
                                <div class="form-outline form-white mb-4">
                                    <input type="Email" id="typeEmailX" class="form-control form-control-lg" name="typeEmailX" />
                                    <label class="form-label" for="typeEmailX">Email</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                  <input type="Datee" id="typeDateX" class="form-control form-control-lg" name="typeDateX"/>
                                  <label class="form-label" for="typeDateX">Datee</label>
                              </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="Address" id="typeAddressX" class="form-control form-control-lg" name="typeAddressX"/>
                                    <label class="form-label" for="typeAddressX">Address</label>
                                </div>
                                <div class="form-outline form-white mb-4">
                                    <input type="Seat" id="typeSeatX" class="form-control form-control-lg" name="typeSeatX"/>
                                    <label class="form-label" for="typeSeatX">Seat</label>
                                </div>


                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Submit</button>

                                
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>