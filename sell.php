<!DOCTYPE html>
<html lang="en">
<head>
   <title>Sell</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
   <link rel="stylesheet" href="css/sell.css">
</head>
<body>
    <!--banner-->
       <div class="jumbotron jumbotron-fluid">
         <div class="container">
           <h1>Recycle Waste!</h1>      
           <p>Sell recyclable materials and contribute to environmental sustainablitily.</p>
        </div>
      </div>

    <!--form-->
    <h2>Pickup Time</h2>
        <form action="/action_page.php">
           <div class="form-group">
             <label for="date">Select Date</label>
             <input type="date" class="form-control" placeholder="26-03-2015" id="date" required>
           </div>
           <div class="form-group">
             <label for="time">Select Time</label>
             <input type="time" class="form-control" placeholder="" id="time" required>
           </div>

           <h2>Pickup Location</h2>    
             <div class="form-group">
               <label for="text">Area, Street, Village</label>
               <input type="text" class="form-control" placeholder="Area, Street, Village" id="text" required>
             </div>

             <div class="form-group">
               <label for="text">Town/City</label>
               <input type="text" class="form-control" placeholder="Town/City" id="text" required>
             </div>
             <div class="form-group">
               <label for="pincode">Pincode</label>
               <input type="number" id="number" placeholder="Enter pincode" class="form-control"required>
             </div>

             <div class="form-group form-check">
               <label class="form-check-label">
               <input class="form-check-input" type="checkbox"> Mark this my default address
             </label>
            </div>
            <button class="form-group"type="submit">SUBMIT</button>
         </form>
    <!--footer-->
     <div id="footer">
      <div class="container">
          <div class="row">
              <div class="col-md-6" style="font-size: 15px;">@copyright greentrash.com</div>
              <div class="col-md-6">
                  <ul id="icons" class="float-md-end">
                      <li><a href="" class="fab fa-facebook-square"></a></li>
                      <li><a href="" class="fab fa-twitter-square"></a></li>
                      <li><a href="" class="fab fa-linkedin"></a></li>
                  </ul>
              </div>
          </div>
      </div>
  </div>

</body>
</html>
