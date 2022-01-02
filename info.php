<!DOCTYPE html>
<html lang="en">
<head>
   <title>INFO</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
   <link rel="stylesheet" href="css/info.css">
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
       <h2>Please enter your product information</h2>
    
        <form action="file:///E:/Sell%20page/sell.html">
           <div class="form-group">
             <label for="material-type">Select Recyclable Material Type:</label>
              <select class="form-control"id="material-type" required>
                <option value="">--Please choose an option--</option>
                <option value="Plastic">Plastic</option>
                <option value="Glass">Glass</option>
                <option value="Paper">Paper</option>
                <option value="Electronic Devices">Electronic Waste</option>
                <option value="Wood">Wood</option>
                <option value="Cardboard">Cardboard</option>
                <option value="Metals">Metal</option>
                <option value="Tyres">Tyres</option>
                <option value="Batteries">Batteries</option>
                <option value="Textile & Clothes">Textile & Clothes</option>
              </select>
             
           </div>
           <div class="form-group">
             <label for="text">Name of Product</label>
             <input type="text" class="form-control" placeholder="Name of Production" id="text" required>
           </div>
           <div class="form-group">
             <label for="text">Product Quantity</label>
             <input type="text" class="form-control" placeholder="Quantity in kg" id="text" required>
           </div>
           
          <p class="form-group">Upload Product Image</p>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile" required>
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          <script>
          // Add the following code if you want the name of the file appear on select
          $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
          });
          </script>
          
           <button class="form-group"type="submit"><a href="sell.html">Help Me Recycle!</a></button>
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

</body>
</html>