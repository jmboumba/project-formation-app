<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
    
  <style>
    .p{
        font-size:25px; 
        
    }
    .li {
        display: inline;
    }

    .nav {
  list-style-type: none;
  text-align: center;
  margin: 0;
  padding: 0;
}

.nav li {
  display: inline-block;
  font-size: 20px;
  padding: 10px;
}
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <style>
    body{
        background-color: #eedcee 
    }
  </style>
</head>
<body>
    <div style="height:70px">
        @include('admin.header')
    </div>

        <div>
            @include('admin.side')
        </div>

        <div style="margin-left:20%; margin-top: 5%; font-weight: bold">
            <div class="w3-container">
            
                <div style="background-color: #eedcee">
                <ul class="nav">
                    <li>
                        <a href="#home">
                        <div style="background-color: #c22eee ; width:40px; height:35px; border: 1px solid white; ">
                            <center><svg style="margin-top:8px; color:white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                            </svg></center>
                            </div>
                        </a>
                    </li>
                    <li><a href="#about"><p style="margin-top: 3px; margin-left: 15px; font-size: 20px">Dashboard</p></a></li>
                </ul>

                <ul class="nav">
                    <li>
                        <a href="#home">
                        <div class="" style="background-color: #61b1f4 ; width:250px; height:250px; border: 1px solid white; ">
                                <center><h1 style='margin-top:50%'>10 000,0 VISITORS</h1>
                                <span>Hello</span><span>Hello</span>
                                </center>
                            </div>
                        </a>
                    </li>
                    <li style="margin-left: 50px"><a href="#about">
                        <div class="" style="background-color: #57e73a ; width:250px; height:250px; border: 1px solid white; ">
                                <center><h1 style='margin-top:50%'>10 000,0 INSCRIPTIONS</h1>
                                <span>Hello</span><span>Hello</span>
                                </center>
                        </div>
                    </li>
                    <li style="margin-left: 50px"><a href="#about">
                        <div class="" style="background-color:white; width:250px; height:250px; border: 1px solid white; ">
                                <center><h1 style='margin-top:50%'>10 000,0 UTILISATEURS</h1>
                                <span>Hello</span><span>Hello</span>
                                </center>
                        </div>
                    </li>
                </ul>

            
        <div style="margin-left:20%; margin-top: 20%; font-weight: bold">
            <div class="w3-container">
            <center>
                <h1>Admin Home Page</h1>
            </center>
            </div>
        </div>  
    
</body>
</html>