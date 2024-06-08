
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>INEC Homepage</title>
        <link href="assets/static/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link href="assets/static/fontawesome.css/css/all.min.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/x-icon" href="assets/static/images/voteicon.png" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link href="assets/static/css/styles.css" rel="stylesheet" />
        <style>
            .nav-link:hover{
                text-decoration:underline;
                color:green;
            }
            .btn{
              
                border-radius:30px;
                box-shadow:0 0 5px green,0 0 25px white, inset 6px 6px 10px 0 rgba(0, 0, 0, 0.2), inset -6px -6px 10px 0 rgba(255, 255, 255, 0.5);
            }
            .img{
                width:40px;
            }
            footer{
                background: linear-gradient(135deg, green,#00feba,green);
            }
            .col-md-4{
                box-shadow: inset 6px 6px 10px 0 rgba(0, 0, 0, 0.2), inset -6px -6px 10px 0 rgba(255, 255, 255, 0.5);
            }
        </style>
    </head>
    <body>
       
        <nav class="navbar navbar-expand-lg navbar-dark bg-light">
            <div class="container px-5">
                <a class="navbar-brand text-success" href="#!"><img src="assets/static/images/box.jpeg" class="img" ><strong>INEC</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active text-success" aria-current="page" href="index.php"><b>Home</b></a></li>
                        <li class="nav-item"><a class="nav-link text-dark" href="polling.php"><b>Polling Unit</b></a></li>
                        <li class="nav-item"><a class="nav-link text-dark" href="lga.php"><b>LGA</b></a></li>
                        <li class="nav-item"><a class="nav-link btn btn-outline-success text-dark" href="create.php">Update</a></li>
                    </ul>
                </div>
            </div>
        </nav>