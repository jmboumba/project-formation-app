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
.popup {
                position: fixed;
                z-index: 1;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgba(
                    0,
                    0,
                    0,
                    0.4
                );
                display: none;
            }
            .popup-content {
                background-color: white;
                margin: 10% auto;
                padding: 20px;
                border: 1px solid #888888;
                width: 30%;
                font-weight: bolder;
            }
            .popup-content button {
                display: block;
                margin: 0 auto;
            }
            .show {
                display: block;
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
    .div_center{
            text-align: center;
            padding-top: 40px;
        }
        .h2_font{
            font-size:40px;
            padding-bottom:40px;
        }
        .input_color{
            color:black;
        }
        .center{
          margin: auto;
          width : 50%;
          text-align: center; 
          margin-top:30px;
          border: 3px solid white;
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
                <div id="myPopup" class="popup">
                    <div class="popup-content">
                        <h1 style="color: green">
                            Category added successfully !
                        </h1>
                        <button id="closePopup">
                            Close
                        </button>
                    </div>
                </div>
                <div style="background-color: #eedcee">
                <div class="div_center">
                    <h2 class="h2_font">Add Catagory</h2>

                    <form action="{{url('/add_categorie')}}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <input class="input_color" type="text" name="label" placeholder="Wrtite subcatagory name">  

                        <label for="">Image</label>
                        <input class="input_color" type="file" name="image"><br><br>

                        <input id="myButton" type="submit" class="btn btn btn-primary" name="submit" value="Add Catagory">
                    </form>
                </div>

                <table class='center'>
                  <tr>
                    <td>Category Name</td>
                    <td>Image</td>
                    <td>Action</td>
                  </tr>

                  @foreach($categories as $categories)
                  <tr>
                    <td>{{$categories->label}}</td>
                    <td><img style="width: 100px; height:100px;" src="/categorie/{{$categories->image}}" alt=""></td>
                    <td>
                      <a onclick="return confirm('Are you sure to delete this ? ')" class="btn btn-danger" href="{{url('/delete_categorie', $categories->id)}}">Delete</a>
                    </td>
                  </tr>
                  @endforeach

                </table>

                </div>
            </div>
        </div>


        <script>
            myButton.addEventListener(
                "click",
                function () {
                    myPopup.classList.add("show");
                }
            );
            closePopup.addEventListener(
                "click",
                function () {
                    myPopup.classList.remove(
                        "show"
                    );
                }
            );
            window.addEventListener(
                "click",
                function (event) {
                    if (event.target == myPopup) {
                        myPopup.classList.remove(
                            "show"
                        );
                    }
                }
            );
        </script>
    
</body>
</html>