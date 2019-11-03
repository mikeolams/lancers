@extends('layouts.auth')
@section('title'. 'Client Information')

@section('main-content')
<!DOCTYPE html>
<html lang="en">

{{-- 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice View</title>
    <link rel="shortcut icon" href="https://res.cloudinary.com/ddu0ww15f/image/upload/c_scale,h_16/v1571841777/icons8-home-office-24_veiqea.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans|Ubuntu&display=swap');
    </style>
</head>
--}}
<style>
    
    .top-buttons {
        border: 2px solid #A6A6A6 !important;
        border-radius : 10px;
        text-align : center;
        vertical-align : middle;
        background-color : #fff;
        margin-right : 20px;
        max-width: 100%;
        word-wrap: break-word;
        margin-bottom : 7%;
    }
    
    .top-buttons:hover {
        background-color : #000;
        color : #fff; 
    }
    
    .errorMsg{
        margin : 30px;
    }

    *{
        box-sizing: border-box;
    }
    table {
        border-spacing: 2px;
    }

    td,
    th {
        width: 46vw;
        margin: 0 auto;
        padding: 0 0 10px;
        text-align: left;
    }
    td:first-child,
    th:first-child {
        padding-left: 20px;
    }
    td:last-child,
    th:last-child {
        margin-right: .5rem;
       
    }
thead, .table-date {
        max-width: 100%;
        font-family: Ubuntu;
        font-weight: bold;
        font-size: 14px;
        line-height: 28px;
        color: #A6A6A6;
}
tbody, .bold {

        font-family: Ubuntu;
        font-size: .97rem;
        font-weight: 500;
        line-height: 1.5;
        color: #212529;
     }
     .table-responsive {
    display: table;
    width: 100%;
    overflow-x: unset;
    padding-right: .5rem;
    -webkit-overflow-scrolling: touch;
}
.note h5 {
    font-family: Ubuntu;
    font-weight: bold;
    font-size: 14px;
    color: #A6A6A6;
}
     .tableAmount {
        font-weight: 900;
        font-size: 1.05rem;
     }
     .invoice-main, #page-content-wrapper {
      width: 80%;
     }

    {{--
     .navbar {
      width: 100%;
     }
    --}}
   
    .invoice-body {
       
        width: 55.5vw;
        width: 80%;
    }

    
    p {
        margin-bottom: .5rem;
      }

body {
    overflow-x: hidden;
}
    {{--
#sidebar-wrapper {
  min-height: 200vh;
  /*position: fixed;*/
  width: 40vh;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)!important;
  -webkit-transition: margin .25s ease-out;
  -moz-transition: margin .25s ease-out;
  -o-transition: margin .25s ease-out;
  transition: margin .25s ease-out;
}
img {
      width: .85rem;
      margin-right: .5rem;
      margin-left: 1.8rem;
}
.imgSvg {
    padding-left: unset;
      margin-right: .2rem;
      margin-left: 1.8rem;
  }
    --}}
.bg-dark {
  background: #091429 !important;
  font-size: .75rem;
  color: #fff;
}
.colorC {
  color: #00F9FF;
}
.colorC2 {
  color: #0ABAB5;
}
    {{--
.navbar {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: .5rem 0;
}
    
a.bg-dark:focus, a.bg-dark:hover, button.bg-dark:focus, button.bg-dark:hover {
    background-color: #c1c1c1!important;
}
.list-group-item-action:focus, .list-group-item-action:hover {
    color: #091429;
}
.list-group-item {
    padding: 1.275rem 1.25rem;
    margin-bottom: -1px;
    background-color: #c1c1c1;
    border: unset;
    font-family: 'Open Sans', sans-serif;
    font-weight: 700;
    letter-spacing: .9px;
    font-size: 14px;
}

#sidebar-wrapper .sidebar-heading {
  padding: 0.975rem 3.3rem;
  font-size: 1.5rem;
  font-family: 'Pacifico', cursive;
}
    
.dropdown-menu {
    position: relative;
    width: 100%;
    min-width: unset;
    padding: 0;
    margin: 0;
    border-radius: 0;
    border: none;
    background:#212531;
    background: linear-gradient(to right bottom, #2f3441 50%, #212531 50%);
    color: #fff;
    box-shadow: none;
}
.dropdown-menu.show {
    top: 0;
}
.dropdown-item {
    display: block;
    width: 100%;
    padding: .25rem 1.5rem;
    clear: both;
    font-weight: 300;
    color: #fff;
}
svg {
  padding-left: .5rem;
  padding-bottom: .2rem;
    }
   
#page-content-wrapper {
  width: 100%;
  /*margin-left: auto;
  margin-right: -20%;*/
}
    
#wrapper.toggled #sidebar-wrapper {
  margin-left: 0;
}
        
/*navBar*/
        
.bg-light {
    background-color: unset!important;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);
}
.navbar-light .navbar-nav .nav-link {
    margin-left: 1.5vw;
    font-family: 'Ubuntu', sans-serif;
    font-weight: 500;
    color: #000;
}
.navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
    color: #0ABAB5;
}

.btn.bg {
    color: #fff;
    background-color: #0ABAB5;
}

.btn-primary {
  background-color: #0ABAB5;
    border-color: #0ABAB5;
}

.toggleNav {
    display: none;
  }

.toggleDesktop {
  display: inline-block;
  display: none;
  margin-left: 10px;
  /*border: 1px solid red;*/
  padding: .25rem .75rem;
  line-height: 1;
  background-color: transparent;
    border: 1px solid transparent;
  font-size: 1.25rem;
  border-color: rgba(0,0,0,.1);
  color: rgba(0,0,0,.5);
  border-radius: .25rem;
}
   

/*.smallcont {
  margin-left: 8%;
  margin-right: -200px;
}*/
     --}}
.btn-outline-dark {
        font-family: Ubuntu;
        font-weight: bold;
        font-size: 14px;
        border-color: #0ABAB5;
}


@media (max-width: 992px) {    
#sidebar-wrapper {
  min-height: 160vh;
}



    td,
    th {
        padding: 0 0 7px !important;
    }
    td:last-child,
    th:last-child {
        margin-right: .3rem;
    }
thead, .table-date {
        font-size: 12px;
        line-height: 14px;
}
.col-6.mb-4 {
    padding-left: 0;
}
.table td, .table th {
    padding:0;
}
tbody, .bold {
        font-size: .82rem;
        line-height: 1.5;
     }
     .tableAmount {
        font-weight: 900;
        font-size: .9rem;
     }
     .invoice-main {
      width: 100%;
     }
    .invoice-container {
        position: relative;
        top: 3rem;
        width: 54vw;
        width: 100%;
        margin-left: 5.5rem;
        margin-bottom: 2rem;
    }

    .invoice-main, #page-content-wrapper {
      width: 80%;
     }
    .invoice-body {
        position: relative;
        width: 55.5vw;
        width: 80%;
    }
.invoice-table {
  padding-left: 0;
}
.thickLine {
    border-top: 2px solid #000 !important;
}
    .logo-img {
        width: 4.5rem;
        float: right;
    }

.btn-outline-dark {

        font-family: Ubuntu;
        font-weight: bold;
        font-size: 12px;
}
    h1 {
        font-size: 20px;
    }
    p {
        margin-bottom: .2rem;
        font-size: .7rem;
      }
.footer-text{
    font-family: Ubuntu;
    font-style: normal;
    font-weight: normal;
    font-size: 1rem;
    }
    #page-content-wrapper {
  min-width: 100%;
}

.toggleDesktop {
  display: block;
}

.navbar-toggler {
  display: block;
}

    @media (max-width: 991px) {
        .nav-item.ml-3 {
            margin-left: 0!important;
        }

    }
}
@media (max-width: 768px) {
  #sidebar-wrapper {
    margin-left: 0;
    height: 76vw;
    width: 20vh;
  }

  #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }

img {
      width: .65rem;
      margin-right: .5rem;
      margin-left: .2rem;
}
.imgSvg {
      margin-right: .2rem;
      margin-left: .2rem;
  }
  .list-group-item {
    padding: 1.275rem 1.25rem;
    margin-bottom: -1px;
    font-size: .7rem;
    letter-spacing: .4px;
}
#sidebar-wrapper .sidebar-heading {
  padding: 0.975rem 2.3rem;
  font-size: 1.15rem;
}
.btn-outline-dark {
        font-size: 10px;
    padding: .275rem .5rem;
}
.btn-outline-dark.ml-4 {
    margin-left: .5rem!important;
}
h1 {
        font-size: 16px;
    }
    p {
        margin-bottom: .2rem;
        font-size: .5rem;
      }
      .logo-img {
    width: 4rem;
}
thead, .table-date {
        font-size: 9px;
        line-height: 12px;
}
tbody, .bold {
        font-size: .72rem;
        line-height: 1;
     }
      td,
    th {
        width: 21vw;
    }
     .tableAmount {
        font-weight: 600;
        font-size: .75rem;
     }
     .navbar-light .navbar-nav .nav-link {
        font-size: .7rem;
}
.dropdown-item {
    font-size: .75rem;
    }
}
@media (max-width: 576px) {
    .invoice-body.ml-4 div {
        /* display: none; */
        display: flex;
        flex-direction: column;
    }

    #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }
    
    .invoice-body.ml-4 button {
      display: block !important;
      margin: 0.3rem auto;
      width: 100%;
    }
    #sidebar-wrapper {
    width: 15vh;
    height: 92vw;
  }
img {
      width: .65rem;
      margin-right: .1rem;
      margin-left: .8rem;
}
.imgSvg {
      margin-right: .1rem;
      margin-left: .8rem;
  }
  .list-group-item {
    padding: 1.275rem 1rem;
    font-size: .55rem;
    letter-spacing: .2px;
}
#sidebar-wrapper .sidebar-heading {
  padding: 0.975rem 2.1rem;
  font-size: .9rem;
}

h1 {
        font-size: 14px;
    }
      .logo-img {
    width: 4rem;
}
thead, .table-date {
        font-size: 8px;
        line-height: 12px;
}
tbody, .bold {
        font-size: .62rem;
        line-height: 1;
     }
      td,
    th {
        width: 28vw;
    }
     .tableAmount {
        font-weight: 600;
        font-size: .75rem;
     }
     .navbar-light .navbar-nav .nav-link {
        font-size: .55rem;
}
.dropdown-item {
    font-size: .55rem;
    }

  
}
@media (max-width: 450px) {
    #sidebar-wrapper {
        display: none;
    }    
      td,
    th {
        width: 38vw;
    }

}
#page-content-wrapper {
    min-width: 0;
    width: 100%;
     /*margin-left: 0;*/
  }
  .toggleNav {
    display: block;
    display: inline-block;
  margin-left: 10px;
  /*border: 1px solid red;*/
  padding: .25rem .75rem;
  line-height: 1;
  background-color: transparent;
    border: 1px solid transparent;
  font-size: 1.25rem;
  border-color: rgba(0,0,0,.1);
  color: rgba(0,0,0,.5);;
  border-radius: .25rem;
  }

  a:hover {
    color: rgba(0,0,0,.5);
    text-decoration: none;
  }

  .toggleDesktop {
    display: none;
  }
</style>

<body>

<div class="d-flex" id="wrapper">

@if(array_key_exists('error', $clientData))
    <h1 class="errorMsg">{{ $clientData['error'] }}</h1>
@else

    <!-- Sidebar -->
{{--
    <div class="bg-dark border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Lan<span class="colorC">c</span>ers </div>
      <div class="list-group list-group-flush">
        <a href="documents.html" class="list-group-item list-group-item-action bg-dark"><img src="https://res.cloudinary.com/samtech/image/upload/v1570727367/home.svg" alt=""> Dashboard</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark"><img src="https://res.cloudinary.com/samtech/image/upload/v1570727365/client.svg" alt=""> Client</a>
          
        <!-- dropDown Menu -->
      <div class="nav-item dropdown">
        <a href="#" class="nav-link list-group-item list-group-item-action bg-dark" data-toggle="dropdown">
        <img src="https://res.cloudinary.com/samtech/image/upload/v1570727368/lightbulb.svg" alt=""> Project  <svg width="16" height="12" viewbox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.54" fill-rule="evenodd" clip-rule="evenodd" d="M10.6 0.600098L6 5.2001L1.4 0.600098L0 2.0001L6 8.0001L12 2.0001L10.6 0.600098Z" fill="white"/>
        </svg>
        </a>
       <div class="dropdown-menu animated fadeInLeft" role="menu">
          <a class="dropdown-item" href="#">Status</a>  
          <a class="dropdown-item" href="#">Overview</a>   
          <a class="dropdown-item" href="#">Collabrators</a>  
          <a class="dropdown-item" href="#">Task</a>  
          <a class="dropdown-item" href="#">Documents</a>  
        </div>
      </div>

        <a href="#" class="list-group-item list-group-item-action bg-dark colorC2"><svg class="imgSvg" width="20.5" height="20.5" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0)">
        <path d="M21.3143 0H7.29379C6.49144 0 5.83864 0.652795 5.83864 1.45515V4.71151C3.17894 5.47266 1.22656 7.92604 1.22656 10.8269C1.22656 13.7278 3.17889 16.1812 5.83864 16.9423V22.545C5.83864 23.3473 6.49144 24.0001 7.29379 24.0001H18.7513C18.8872 24.0001 19.0175 23.9461 19.1137 23.85L22.6193 20.3443C22.7154 20.2482 22.7694 20.1178 22.7694 19.9819V1.45515C22.7694 0.652795 22.1167 0 21.3143 0ZM7.29379 1.02503H21.3143C21.5515 1.02503 21.7444 1.21797 21.7444 1.45515V3.00191H6.86367V1.45515C6.86367 1.21797 7.05662 1.02503 7.29379 1.02503ZM2.25159 10.8269C2.25159 7.88538 4.64463 5.49233 7.58611 5.49233C10.5276 5.49233 12.9206 7.88538 12.9206 10.8269C12.9206 13.7683 10.5276 16.1614 7.58611 16.1614C4.64463 16.1614 2.25159 13.7683 2.25159 10.8269ZM6.86367 22.5449V17.1452C7.10089 17.1721 7.34187 17.1865 7.58616 17.1865C9.49637 17.1865 11.2124 16.3397 12.3791 15.0021H15.5194C15.8025 15.0021 16.0319 14.7726 16.0319 14.4896C16.0319 14.2065 15.8025 13.9771 15.5194 13.9771H13.1091C13.5549 13.1985 13.8405 12.3172 13.9215 11.3783H15.5194C15.8024 11.3783 16.0319 11.1488 16.0319 10.8658C16.0319 10.5827 15.8024 10.3532 15.5194 10.3532H13.928C13.8587 9.41637 13.5853 8.53544 13.1526 7.75451H15.5193C15.8024 7.75451 16.0318 7.52506 16.0318 7.242C16.0318 6.95895 15.8024 6.72949 15.5193 6.72949H12.4455C11.2781 5.34702 9.53298 4.46726 7.58602 4.46726C7.34172 4.46726 7.10074 4.48161 6.86352 4.50855V4.02694H21.7443V19.4693H19.6938C18.8914 19.4693 18.2387 20.1221 18.2387 20.9244V22.975H7.29379C7.05662 22.975 6.86367 22.7821 6.86367 22.5449ZM19.2638 22.2501V20.9244C19.2638 20.6873 19.4568 20.4944 19.6939 20.4944H21.0196L19.2638 22.2501Z" fill="#0ABAB5"/>
        <path d="M17.534 7.75452H19.236C19.5191 7.75452 19.7485 7.52506 19.7485 7.242C19.7485 6.95895 19.5191 6.72949 19.236 6.72949H17.534C17.2509 6.72949 17.0215 6.95895 17.0215 7.242C17.0215 7.52506 17.2509 7.75452 17.534 7.75452Z" fill="#0ABAB5"/>
        <path d="M17.534 11.379H19.236C19.5191 11.379 19.7485 11.1496 19.7485 10.8665C19.7485 10.5835 19.5191 10.354 19.236 10.354H17.534C17.2509 10.354 17.0215 10.5835 17.0215 10.8665C17.0215 11.1496 17.2509 11.379 17.534 11.379Z" fill="#0ABAB5"/>
        <path d="M17.534 15.0026H19.236C19.5191 15.0026 19.7485 14.7731 19.7485 14.4901C19.7485 14.207 19.5191 13.9775 19.236 13.9775H17.534C17.2509 13.9775 17.0215 14.207 17.0215 14.4901C17.0215 14.7731 17.2509 15.0026 17.534 15.0026Z" fill="#0ABAB5"/>
        <path d="M19.2327 18.6261C19.5158 18.6261 19.7452 18.3966 19.7452 18.1136C19.7452 17.8305 19.5158 17.6011 19.2327 17.6011H14.4383C14.1552 17.6011 13.9258 17.8305 13.9258 18.1136C13.9258 18.3966 14.1552 18.6261 14.4383 18.6261H19.2327Z" fill="#0ABAB5"/>
        <path d="M11.5646 8.24182L10.9394 7.61656C10.771 7.44821 10.5471 7.35547 10.309 7.35547C10.0708 7.35547 9.847 7.44821 9.6786 7.61656L6.399 10.8962L5.49244 9.98959C5.32409 9.82129 5.1002 9.72855 4.8621 9.72855C4.624 9.72855 4.40011 9.82129 4.23176 9.98964L3.60635 10.615C3.25881 10.9626 3.25881 11.5282 3.6064 11.8757L5.76856 14.0379C5.93696 14.2063 6.16086 14.299 6.399 14.299H6.39905C6.63715 14.299 6.86105 14.2063 7.02935 14.038L11.5647 9.5026C11.9122 9.15502 11.9122 8.5894 11.5646 8.24182ZM6.39896 13.2187L4.42559 11.2453L4.86205 10.8089L6.03654 11.9834C6.23671 12.1835 6.5612 12.1835 6.76138 11.9834L10.309 8.43575L10.7455 8.87221L6.39896 13.2187Z" fill="#0ABAB5"/>
        </g>
        <defs>
        <clippath id="clip0">
        <rect width="20.5" height="20.5" fill="white"/>
        </clippath>
        </defs>
        </svg> invoice </a> 

        <a href="#" class="list-group-item list-group-item-action bg-dark"><img src="https://res.cloudinary.com/samtech/image/upload/v1570727368/policy.svg" alt=""> Contract</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark"><img src="https://res.cloudinary.com/samtech/image/upload/v1570727365/approval.svg" alt=""> Proposals</a>
      </div>
    </div>

    <!-- /#sidebar-wrapper -->

    <!-- Navbar -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
      <a href="#" class="toggleNav">☰</a>
      <button type="button" class="toggleDesktop">☰</button>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-left mt-2 mt-lg-0">
            <!-- <button type="button" class="toggleDesktop">☰</button> -->
            <li class="nav-item ml-3 ">
              <a class="nav-link " href="#">Project Info 
                <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Client Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Settings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tools & Resources</a>
            </li>
          </ul>
        </div>
      </nav> 
--}}
<div class="smallcont">
    {{--
      <section class="invoice-body ml-4"> 
          <div class="container ">
              <div class="row mt-5 ml-4">
                <button type="button" class="btn btn-outline-dark ml-auto">Edit</button>
                <button type="button" class="btn btn-outline-dark ml-4"> Delete </button>
              </div>
          </div>
      </section> 
    --}}
    
      
      </div>
      <section class="">
        <div class="container ml-5">
          <div class="row ">
            <div class="col-12">
                <section>
                    <button type="button" class="btn btn-lg top-buttons" onclick="location.href='/clients/{{$clientData['id']}}/edit'"><b>Edit</b></button>
                    <button type="button" class="btn btn-lg top-buttons delete-btn" data-id="{{$clientData['id']}}"><b>Delete</b></button>
                    {{--<button type="button" class="btn btn-lg top-buttons" data-id="{{$client->id}}" onclick="location.href='/clients/{{$clientData['id']}}/delete'"><b>Delete</b></button> --}}
                    <form action="/clients/{{$clientData['id']}}/delete" method="post" id="delete-{{$clientData['id']}}">
                        @csrf
                        @method('delete')
                    </form>
                </section>
                <h2>Contact</h2>
            </div>

          </div>

        </div>
        <table class="table-responsive ml-5" style="width: 100%">
          <thead>
              <tr>
                  <th>Name</th>
                  <th>Email Address </th>
                  <th>Phone Number</th>
              </tr>
          </thead>
          <tbody>
              
          <tr>
              <td>
                @if($clientData['name'] !== null)
                    <span contenteditable="">{{ ucfirst($clientData['name']) }}</span>
                @else
                    N/A
                @endif
              </td>
              <td>
                  @if($clientData['email'] !== null)
                    <span contenteditable="">{{ $clientData['email'] }}</span>
                  @else
                  @endif
              </td>
              <td>
                  @if(array_key_exists('number',$clientData))
                    @if($clientData['number'] !== null)
                        {{ $clientData['number'] }}
                    @endif
                  @else
                    N/A
                  @endif
              </td>      
          </tr>
          
          
        </tbody>
        
      </table><br>
      <div class="col-12 ml-5"> 
          <h2>Billing Information</h2>
      </div>
      <table class="table-responsive ml-5" style="width: 100%">
          <thead>
              <tr>
                  <th> Currency</th>
                  <th> Address </th>
                  <th> City</th>
              </tr>
          </thead>
          <tbody>
              
          <tr>
              <td><span contenteditable="">NGN</span> </td>
              <td><span contenteditable="">{{$clientData['street_number']}} {{ucfirst($clientData['street'])}} Street</span></td>
              <td>{{$clientData['city']}}</td>      
          </tr>
          
        </tbody>
        
      </table><br>
      <table class="table-responsive ml-5" style="width: 100%">
          <thead>
              <tr>
                  <th> Zip Code</th>
                  <th> Country </th>
                  <th> State</th>
              </tr>
          </thead>
          <tbody>
              
          <tr>
              <td><span contenteditable="">{{$clientData['zipcode']}}</span> </td>
              <td><span contenteditable="">{{$clientData['clientCountry']}}</span></td>
              <td>{{$clientData['clientState']}}</td>      
          </tr>
          
        </tbody>
        
      </table><br>
      <div class="col-12 ml-5"> 
          <h2>More</h2>
      </div>
      <table class="table-responsive ml-5">
          @if( count($clientData['contacts'] ?? []) < 1 )
            <thead>
              <tr>
                  <th> N/A</th>   
              </tr>
            </thead>
          @else
            <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email Address </th>
                        <th>Phone Number</th>
                    </tr>
            </thead>
            <tbody>
                @foreach($clientData['contacts'] ?? [] as $contact)
            
                    <tr>
                        <td>
                            @if($contact['name'] !== null)
                            <span contenteditable="">{{ ucfirst($contact['name']) }}</span>
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            @if($contact['email'] !== null)
                            <span contenteditable="">{{ $contact['email'] }}</span>
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            @if(array_key_exists('number',$contact))
                                @if( $contact['number'] !== null )
                                   <span contenteditable="">{{ $contact['number'] }}</span> 
                                @else
                                    N/A
                                @endif
                            @else
                                N/A
                            @endif
                        </td>      
                    </tr>
                @endforeach
            </tbody>
          @endif
        </table>
      </section>


    
@endif
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
          window.onload
          var form = document.getElementsByClassName("form-inline")[0];
          form.style.display = "none";
        
          $(".delete-btn").on('click', e => {
            e.preventDefault();

            let id = e.target.dataset.id;

            $(`#delete-${id}`).submit();
          });
          $(function() {
            $('.toggleNav').on('click',function() {
              $('#sidebar-wrapper').slideToggle();
            });
          });

          $(function() {
                $('.toggleDesktop').on('click',function() {
                  $('#sidebar-wrapper').slideToggle();
                });
              });
          
    </script>
</body>

</html>

@endsection