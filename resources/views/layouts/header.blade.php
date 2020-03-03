<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>City car bazar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('fontawesome-free-5.12.0-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">    
</head>
<body>
    
    <section id="main-menu">
 <nav class="navbar navbar-expand-lg navbar-dark my-nav fixed-top">
    <a href="index.blade.html" class="navbar-brand"><img src="{{asset('img/citycarbazaar-logo.png')}}" height="40"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="{{url('/')}}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{url('/about')}}" class="nav-link">About Us</a></li>
            <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Vehicle</a>
                <ul class="dropdown-menu my-submenu">
                    <li class="nav-item"><a href="{{url('/stock')}}" class="nav-link" >Stock</a></li>
                    <li class="nav-item"><a href="{{url('/new collection')}}" class="nav-link">New Collection</a></li>
                    
                </ul>
            </li>
            <li class="nav-item"><a href="{{url('/service')}}" class="nav-link">Service</a></li>
            <li class="nav-item"><a href="{{url('/recondition')}}" class="nav-link">Recondition</a></li>
            <li class="nav-item"><a href="{{url('/contact us')}}" class="nav-link">Contact Us</a></li>
        </ul>
        <!-- <form class="form-inline ml-auto">
            <input type="text" class="form-control ml-4" placeholder="Search Here">
            <input type="button" class="btn btn-outline-dark ml-2" value="Search">
        </form> -->
        
    </div>
</nav>
</section>