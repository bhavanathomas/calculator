<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col col col-12 col-sm-12 col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-info">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">Calculator</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          
                          <li class="nav-item">
                            <a class="nav-link" href="addition.php">Addition</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="sub.php">Substraction</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="mul.php">Multiplication</a>
                          </li>
    
                          <li class="nav-item">
                            <a class="nav-link" href="div.php">Division</a>
                          </li>
                                 
                        
                      </div>
                    </div>
                  </nav>
            </div>
        </div>

    <div class="row">

        <div class="col-col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">

        </div>
        <div class="col-col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <table>
                <tr>
                    <td>Number1</td>
                    <td><input  id= "num1" type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Number2</td>
                    <td><input id= "num2" type="text" class="form-control"></td>
                </tr>
                <tr>
                 <td></td>
                 <td><button onclick ="subbtnclickdiv()" class="btn btn-info">DIVIDE</button></td>
             </tr>
             <tr>
                 <td></td>
                 <td>
                     <p id="output" > </p>
                 </td>
             </tr>
            </table>
        </div> 
        <div class="col-col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">

        </div>
        </div>
        </div>
        <script src="js\js script.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>


