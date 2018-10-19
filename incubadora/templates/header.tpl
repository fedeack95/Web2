<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <!--base href="http://localhost/Web2/incubadora/" -->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>{$title}</title>
  </head>
  <body>
    <div class="row main-content">
      <header class="col-12">
        <div class="row maintitle">
          <div class="titulo col-sm-8 col-md-8 col-lg-7 col-xl-7">
            <p>Ideas Incubator</p>
          </div>
          <div class="logo d-none col-xs-3 d-sm-block col-sm-4 col-md-4 col-lg-5 col-xl-5">
            <img class="image-logo" src="img/ideas/ideas-logo3.png" alt="image logo">
          </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light row">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active  border" id="dashboard-tab">
                <a class="nav-link" href="incubadora">Dashboard<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item  border">
                <a class="nav-link" href="ranking" id="ranking-tab">Ranking</a>
              </li>
              <li class="nav-item  border">
                <a class="nav-link" href="ideaForm" id="newidea-tab">New Idea</a>
              </li>
              <li class="nav-item border">
                <a class="nav-link" href="showUsers" id="newuser-tab">Users</a>
              </li>
              <li class="nav-item border">
                <a class="nav-link" href="createUser" id="newuser-tab">New User</a>
              </li>
              <li class="nav-item border">
                <a class="nav-link" href="logout" id="rules-tab">LOGOUT</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
