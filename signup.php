<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
     <title>Registration</title>

</head>
<body>
    <!----navbar----->
		<div class=" mb-2 bg-secondary ">
            <nav class="navbar navbar-expand-lg bg-body-secondary" >
              <div class="container-fluid ">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                     <span class="navbar-toggler-icon"></span>
                </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav nav-pills me-auto mb-2 mb-lg-0 ">
                      <li class="nav-item">
                      
                       <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                       <a class="nav-link" href="login.html">Login </a>
                      </li>
                       <li class="nav-item">
                          
                         <a class="mb-2 nav-link" href="#" style="text-decoration: none; ">Help</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="user page.html">About</a>
                       </li>
                    
                    </ul>
                    <form class="d-flex" role="search">
                       <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                       <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
              </div>
      </nav>
    </div>
    <div class="card mx-auto col-md-4  mb-2 mt-3 border rounded p-2 shadow">
        <form>
            <h2 class="text-center text-primary">SIGN UP</h2>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">First Name:</label>
              <input type="text" class="form-control" id="">
              
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">last name:</label>
                <input type="text" class="form-control" id="">
                
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email:</label>
                <input type="email" class="form-control" id="" placeholder="example@gmail.com">
                
              </div>
              <label for="phone" class="form-label">Phone:</label>
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">+255</span>
                <input type="text" class="form-control">
              </div>
              <label for="phone" class="form-label mt-3">Gender:</label>
              <select class="form-select " aria-label="Default select example">
                <option selected><---select Gender---> </option>
                <option value="1">Male</option>
                <option value="2">Female</option>
              </select>
              
            <div class="mb-3 mt-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control">
            </div>
            <div class="mb-3 mt-3">
                <label for="exampleInputPassword1" class="form-label">confirm password</label>
                <input type="password" class="form-control">
              </div>
           
            <button type="submit" class="btn btn-primary col-2 mx-auto d-block text-center">Submit</button>
          </form>
      
        </form>
        
    </div>
   
</body>
</html>