<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
    
  <style>
    .p{
        font-size:25px; 
        
    }
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  
</head>
<body>
    <div style="height:100px">
        @include('header')
    </div>

        
        
        <div>
            @include('admin.side')
        </div>

        <div style="margin-left:20%; margin-top: 20%; font-weight: bold">
            <div class="w3-container">
            <center>
                <h1>Admin Home Page</h1>
            </center>
            </div>
        </div>  
    
</body>
</html>