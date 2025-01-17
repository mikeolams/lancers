@extends('layouts.app')

@section('style')
<style>
    body{
        background-color: #ffffff;
        width: 100%;
        height: 100%;
        overflow-x: hidden;
        font-family: 'ubuntu'
    }
    
    .logo{
        font-size: 36px;
        font-family: 'pacifico', Ubuntu;
        display: block;
        text-align: left;
        padding-left: 40px;
        margin-top: 20px;
     }

     .logo a{
      text-decoration: none;
      color:#000;
     }

     .logo span {
         color: #0abab5;
     }

     .box2{
         padding: 30px;
        max-width: 580px;
        margin: auto;
        background-color: #ffffff;
        border: 2px solid #000000;
        border-radius: 6px;
     }

     .box2 h2 {
         color: #000000;
         text-align: center;
         font-size: 32px;
         font-family: 'Ubuntu';
         margin-bottom: 13px;
         margin-top: 18px;
         padding-top: 8px;
         line-height: 37px;

     }

     .box2 h4 {
         color: ##262626;
         text-align: left;
         font-size: 18px;
         line-height: 21px;
         font-family: ubuntu;
         margin-bottom: 13px;
         margin-top: 18px;
         padding-top: 8px;
         margin-left: 38px;
     }

     form {
         position: relative;
         top: 30px;
         max-width: 500px;
         margin: auto;
         padding-bottom: 30px;
         display: grid;
         grid-template-areas:
            'input1'
            'View Project';
     }

     form input {
        display: block;
        width: 100%;
        margin-top: 10px;
        height: 40px;
        border: 6px solid #eaebed;
        border-radius: 6px;
        padding: 0 10px;
     }

     input[type=text], select {
       width: 100%;
       padding: 0 10px;
       border: 1px solid #eaebed;
       border-radius: 4px;
       height: 45px;
       margin-top: 10px;
     }

     label {
       font-family: 'Lato';
     }

     .viewproject {
       background-color: #1aedd4;
       color: #ffffff;
       padding: 10px;
       outline: none;
       font-size: 18px;
       font-weight: bold;
       border: none;
       font-family: 'open sans';
       cursor: pointer;
       border-radius: 5px;
     }


      .viewprojec:active{
      opacity: 0.6;
     }

     p{
         color: #262626;
         font-size: 16px;
         font-family: 'ubuntu'
         font-weight: normal;
         margin-left: 270px;
         margin-top: 5px;
     }


</style>
<!--Internal CSS Ends -->

@endsection

@section('content')
<div class="logo"> <a href="https://lancers.app/"> Lan<span>c</span>ers </a></div><br>  
<div class="container">

      <div class="row">

          <div class="col-sm-3"></div>

          <div class="col-sm-6">

  <div class="box">
      <div class="box2">
          <h2> Track your Project</h2>
          <h4>Track your project's code to continue</h4>
          <form action="">
              <div class="box3">
                  <label for="">Project Code</label><br>
                  <input type="text"><br><br>
              </div>
  
      <button class="viewproject">
          View Project
      </button>

      <p> Or sign in to view your projects</p>

          </form>
      </div>
      <div class="col-sm-3"></div>
  </div>
</div>
</div>
</div>


@endsection