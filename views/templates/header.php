<!DOCTYPE html>
<html>
  <head>
    <title>F3 Farming System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="/libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">F3 System</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="/index.php/farmer/index">Farmers</a></li>
      <li><a href="/index.php/livestock/index">Livestock</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Top Lists <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Top 10 Farmers by average daily milk output</a></li>
          <li><a href="#">Top 10 Farmers by combined weekly milk output</a></li>
          <li><a href="#">Top 5 Cows with highest weekly milk output</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">

    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
<div class="container">
<?php if(!empty($alert_success))
{
  ?>
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <?php echo $alert_success; ?>
</div>
  <?php
}
?>
<?php if(!empty($alert_danger))
{
  ?>
<div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <?php echo $alert_danger; ?>
</div>
  <?php
}
?>
  <div class="row">

