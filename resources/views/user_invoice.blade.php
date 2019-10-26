
@extends('layouts.master')  

@section('styles')
<style>
    body {
overflow-x: hidden;
}

#sidebar-wrapper {
min-height: 100vh;
margin-left: -15rem;
-webkit-transition: margin 0.25s ease-out;
-moz-transition: margin 0.25s ease-out;
-o-transition: margin 0.25s ease-out;
transition: margin 0.25s ease-out;
background-color: #091429 !important;
}

i {
margin-right: 14px !important;
}

#sidebar-wrapper .sidebar-heading {
padding: 0.875rem 1.25rem;
}

.sidebar-heading {
font-size: 36px;
font-family: "Pacifico", cursive;
color: azure;
font-size: normal;
font-weight: normal;
line-height: 63px;
}

#sidebar-wrapper .list-group {
width: 15rem;
}

#page-content-wrapper {
min-width: 100vw;
}

#wrapper.toggled #sidebar-wrapper {
margin-left: 0;
}

.list-group-item {
margin-top: 1rem;
background-color: #091429 !important;
color: azure;
font-style: normal;
font-weight: bold;
font-size: 18px;
line-height: 25px;
font-family: 'Ubuntu', sans-serif;
}

@media (min-width: 768px) {
#sidebar-wrapper {
  margin-left: 0;
}

#page-content-wrapper {
  min-width: 0;
  width: 100%;
}

#wrapper.toggled #sidebar-wrapper {
  margin-left: -15rem;
}
}

.invoiceContentInner {
margin-top: 4%;
margin-left: 2%;

}

div button.inBut{
font-family: 'Ubuntu', sans-serif;
font-style: normal;
font-weight: bold;
font-size: 28px;
background-color: #0ABAB5
}

li {
margin-right: 8px;
}
.nav2 li {
margin-right: 10px;
}
h5{
padding-top: 40px;
font-family: Open Sans;
font-style: normal;
font-weight: bold;
font-size: 18px;
line-height: 25px;
}

div table thead{
font-family: Open Sans;
font-style: normal;
font-weight: bold;
}

div table tbody{
font-family: Open Sans;
font-style: normal;
font-weight: normal;
}
div nav{
background: #FFFFFF;
box-shadow: 0px 4px 2px rgba(0, 0, 0, 0.1);

}

input {
  width: 500px !important;
  border-radius: 5px;
  text-align: left;
  border: 1px solid #212121;
  height: 40px;
  margin-top: 40px;
  margin-bottom: 30px;  
}

.rounded-circle {
  border-radius: 50%!important;
}

dl, ol, ul {
  margin-left: 0rem;
  margin-bottom: 0rem;
}
.nav-link {
  display: block;
  padding: .2rem 0rem;
}

.dropdown-{
color: azure !important;
}

h4 {
font-family: 'Ubuntu', sans-serif;
font-style: normal;
font-weight: bold;
font-size: 28px;
line-height: 32px;
font: #262626;
}

.table th {
  vertical-align: middle;
  border-top: none;
}

th.alignleft, td.alignleft{
text-align: right!important;
}


div ul{
font-family: 'Ubuntu', sans-serif;
font-style: normal;
font-weight: bold;
}

  </style>
@endsection

@section('sidebar')   

<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-dark border-right bar" id="sidebar-wrapper">
      <div class="sidebar-heading">Lan<span style="color:#00F9FF">c</span>ers</div>
      <ul class="list-group list-group-flush">
        <a href="documents.html" class="list-group-item list-group-item-action bg-light"
          > <i class="fa fa-home" aria-hidden="true"></i> Dashboard</a>
        
        <a href="client-information-active.html" class="list-group-item list-group-item-action bg-light"
          > <i class="fa fa-users" aria-hidden="true"> </i> Clients</a
        >
        <a href="ecal_estimation.html" class="list-group-item list-group-item-action bg-light"
          > <i class="fa fa-calculator" aria-hidden="true"> </i> Estimates</a
        >

        <div>
          <a href="#" class="list-group-item list-group-item-action bg-light  dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-lightbulb-o" aria-hidden="true">  </i> Projects</span></a>
          <ul class="dropdown-menu projectdropdown" aria-labelledby="dropdownMenuButton" style="background-color: #091429" >
              <a class="dropdown-item" style="color: azure;" href="#">Status</a>
              <a class="dropdown-item" style="color: azure;" href="#">Overview</a>
              <a class="dropdown-item" style="color: azure;" href="#">Colaborators</a>
              <a class="dropdown-item" style="color: azure;" href="#">Task</a>
          </ul>
        </div>

        <a href="#invoice-toggle" class="list-group-item list-group-item-action bg-light"
          ><i class="fa fa-file-text-o" aria-hidden="true"></i></i> Invoices</a
        >
        <a href="#" class="list-group-item list-group-item-action bg-light"
          > <i class="fa fa-handshake-o"></i> Contract</a
        >
        <a href="#" class="list-group-item list-group-item-action bg-light"
          > <i class="fa fa-area-chart" aria-hidden="true"></i> Proposals</a
        >
      </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content for invoice.-->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top border-bottom">
          <button class="btn btn-lg" id="invoice-toggle"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
          <h4>Invoices</h4>
          <button class="navbar-toggler"type="button" data-toggle="collapse" data-target="#navbarSupportedContent"aria-controls="navbarSupportedContent"aria-expanded="false"aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class=" nav navbar-nav ml-auto mt-2 mt-lg-0">
                  <li  class="nav-item nav text-center"> <a class=" nav-link ml-3" href="#"><i class="fa fa-comments fa-2x" aria-hidden="true"></i>Support</a></li>
                  <li class="nav-item nav" ><a class="nav-link ml-3" href="#"> <i class="fa fa-bell fa-2x" aria-hidden="true"></i></a></li>
            </ul> 
            <ul >    
              <!-- Profile image drop down -->
                  <div class="nav-item avatar dropdown" style="margin-left: -1.5rem;">
                    <a class="nav-link  dropdown-toggle" id="ProfileDropDownMenu" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="true">
                    <img src="https://i.ibb.co/mvHrj8n/avatar.jpg" boarder="0"class="rounded-circle z-depth-0 avatar"
                      alt="profile image"> Juliet
                  </a>
                          <div class="dropdown-menu dropdown-menu-md-left dropdown-secondary"
                            aria-labelledby="ProfileDropdownMenu">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="#">Log out</a>
                          </div>
                        </div>
          </ul> 
        </div>
      </nav>        
       <div class="container createInvoice" id="invoice-toggle">
          <div class=" container-fluid invoiceContentInner">
                  <div class="container"><button class="btn btn-success btn-bg inBut">Create Invoice</button>
                  </div>
                  
                  <div class="container">
                    <h5>INVOICE</h5>
                    <div class="container row">
                      <input class="form-control sortInvoiceTable" type="text" data-table="table" placeholder="All" aria-label="Search">
                    </div>
                    <div class="table-responsive-md">           
                        <table class="table table-striped table-borderedless table-hover" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th>Invoice</th>
                              <th>Client</th>
                              <th>Project</th>
                              <th>Issued</th>
                              <th>Status</th>
                              <th style="width:40%" class="alignleft">Status</th>
                            </tr>
                          </thead>
                          <tbody id="invoiceTable">
                            <tr>
                              <td>1</td>
                              <td>Grande Agency</td>
                              <td>Branding</td>
                              <td>01/10/19</td>
                              <td><span class="badge badge-button badge-success"> Paid </span></td>
                              <td style="width:40%"class="alignleft">US$4,200.00</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Gracier Inc</td>
                                <td>Glacier Fintech App</td>
                                <td>02/10/19</td>
                                <td><span class="badge badge-button badge-primary"> Sent </span></td>
                                <td style="width:40%"class="alignleft">US$8,800.00</td>
                              </tr>
                          </tbody>
                        </table>
                      </div>
                      
                  </div>
                  
                  
          </div>
              
       </div>
      </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
 
  <!-- Script -->
  <script>
    $("#invoice-toggle").click(function(e) {
e.preventDefault();
$("#wrapper").toggleClass("toggled");
});


(function () {
"use strict";

var TableFilter = (function () {
  var search;

  function dquery(selector) {
    // Returns an array of elements corresponding to the selector
    return Array.prototype.slice.call(document.querySelectorAll(selector));
  }

  function onInputEvent(e) {
    // Retrieves the text to search
    var input = e.target;
    search = input.value.toLocaleLowerCase();
    // Get the lines where to search
    // (the data-table attribute of the input is used to identify the table to be filtered)
    var selector = input.getAttribute("data-table") + " tbody tr";
    var rows = dquery(selector);
    // Searches for the requested text on all rows of the table
    [].forEach.call(rows, filter);
    // Updating the line counter (if there is one defined)
    // (the data-count attribute of the input is used to identify the element where to display the counter)
    var writer = input.getAttribute("data-count");
    if (writer) {
      // If there is a data-count attribute, we count visible rows
      var count = rows.reduce(function (t, x) { return t + (x.style.display === "none" ? 0 : 1); }, 0);
      // Then we display the counter
      dquery(writer)[0].textContent = count;
    }
  }

  function filter(row) {
    // Caching the tr line in lowercase
    if (row.lowerTextContent === undefined)
      row.lowerTextContent = row.textContent.toLocaleLowerCase();
    // Hide the line if it does not contain the search text
    row.style.display = row.lowerTextContent.indexOf(search) === -1 ? "none" : "table-row";
  }

  return {
    init: function () {
      // get the list of input fields with a data-table attribute
      var inputs = dquery("input[data-table]");
      [].forEach.call(inputs, function (input) {
        // Triggers the search as soon as you enter a search filter
        input.oninput = onInputEvent;
        // If we already have a value (following navigation back), we relaunch the search
        if (input.value !== "") input.oninput({ target: input });
      });
    }
  };

})();

  TableFilter.init();
})();

  </script>
@endsection