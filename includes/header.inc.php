<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Upcoming Hackdays near you</title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Bringing details of upcoming hackdays near you. Hackdays, Geek Meets and Conferences for Technology">
    <meta name="author" content="Matt Clements">

    <!-- Le styles -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <!--[if IE 7]><link rel="stylesheet" href="/css/font-awesome-ie7.css"><![endif]-->
    <script src="/js/modernizr-2.5.3.min.js"></script>
    <link type="text/css" rel="stylesheet" href="http://sharenice.org/main.css" />   
	<!--[if IE 6]>
		<link type="text/css" rel="stylesheet" href="http://sharenice.org/ie6.css" >  
	<![endif]-->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-57-precomposed.png">
  </head>

  <body onLoad="shareNiceLoad()">
  
  <a href="https://github.com/mattclements/Hackdays"><img class="forkme" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="/">Hackdays.info</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li<?php if(isset($page) && $page==="home") { echo " class=\"active\""; } ?>><a href="/">Home</a></li>
              <li><a href="/about">About</a></li>
              <li<?php if(isset($page) && $page==="organisers") { echo " class=\"active\""; } ?>><a href="/organisers">Organisers</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">