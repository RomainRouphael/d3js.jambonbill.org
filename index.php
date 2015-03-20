<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>d3js experimentations</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<style>
body { padding-top: 70px; }  
</style>
</head>
<body>


<nav class="navbar navbar-inverse navbar-fixed-top">
   <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">d3js.jambonbill.org</a>
    </div>
  </div><!-- /.container-fluid -->
</nav>


<div class='container'>

<!--
<div class="jumbotron">
  <h1>d3js!</h1>
  <p>Here you can find some of my <a href='http://d3js.org/'>d3js</a> work and experimentations, so you can look, or maybe find some inspiration.</p>
  <p><a class="btn btn-default btn-lg" href="#" role="button">kthxbye</a></p>
</div>
-->

<h2>a picture is worth a thousand words</h2>
<hr />

<div class="row" id='board'>

  <!-- template -->
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a href='dataviz.php?id=33'><img src="img/template.png"></a>
      <div class="caption">
        <h3>Template</h3>
        <p>This is the jambonbill d3js template that Gist uses internally.</p>
        <i class='text-muted'>Tags : template</i>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a href='dataviz.php?id=33'><img src="img/viz1.png"></a>
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>Another attempts at doing something pretty. I had to steal the picture tho</p>
        <i class='text-muted'>Tags : Circle, gravity</i>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a href='dataviz.php?id=33'><img src="img/dashboard640x450.png"></a>
      <div class="caption">
        <h3>Student dashboard</h3>
        <p>This is a test to see how high contrast thumbnails look on this landing page.</p>
        <i class='text-muted'>Tags : #edx, #databits</i>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a href='dataviz.php?id=33'><img src="img/binomial640x450.png"></a>
      <div class="caption">
        <h3>Binomial distribution</h3>
        <p>This is a test to see how high contrast thumbnails look on this landing page.</p>
        <i class='text-muted'>Tags : #binomial, #databits</i>
      </div>
    </div>
  </div>


  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a href='dataviz.php?id=33'><img src="img/kuler-pulse.jpg"></a>
      <div class="caption">
        <h3>Color shock</h3>
        <p>This is a test to see how high contrast thumbnails look on this landing page.</p>
        <i class='text-muted'>Tags : #color, #shock</i>
      </div>
    </div>
  </div>


</div>

<hr />
<!-- footer with some links --> 
<div class="container">
    <div class="menu-wrapper col-md-4">
          <a href="http://jambonbill.org">jambonbill.org</a>
          <a href="http://jambonbill.org">jambonbill.org</a>
    </div>
    <div class="col-md-6">
      email : webmaster at partouze-cagoule.fr
    </div>
    <div class="col-md-2">
      <div class="copyright">copyleft</div>
    </div>
  </div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<script>
$(function(){
  $("#board").html();
});
</script>

<?php 

?>