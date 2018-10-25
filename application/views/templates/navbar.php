<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href=""><strong>COH.IT</strong></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url(); ?>users/dashboard">Dashboard</a></li>
        <li><a href="<?php echo base_url(); ?>Emails">Email Users</a></li>
        <li><a href="<?php echo base_url(); ?>users/admin_users_view">Admin Users</a></li>
        <li><a href="<?php echo base_url(); ?>chbcdomains">CHBCDOMAIN Users</a></li>
        <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav hidden-xs">
      <h2><strong>COH.IT</strong></h2>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="<?php echo base_url(); ?>users/dashboard"><span class="glyphicon glyphicon-dashboard">Dashboard</a></li>
        <li><a href="<?php echo base_url(); ?>emails"><span class="glyphicon glyphicon-envelope"></span>  Email Users</a></li>
        <li><a href="<?php echo base_url(); ?>users/admin_users_view"><span class="glyphicon glyphicon-user"></span>  Admin Users</a></li>
        <li><a href="<?php echo base_url(); ?>chbcdomains"><span class="glyphicon glyphicon-user"></span> CHBCDOMAIN Users</a></li>
        <li><a href="<?php echo base_url(); ?>users/logout"><span class="glyphicon gglyphicon glyphicon-off"></span>  Logout</a></li>
      </ul><br>
    </div>
    <br>
    