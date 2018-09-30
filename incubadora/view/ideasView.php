<?php

/**
 *
 */
class IdeasView
{



  function showIdeas($ideas){
    foreach($ideas as $idea)
      echo "<p>$idea->name</p>";
  }

   function createIdeas(){

   }

   function editTarea(){

   }

  function showRankingIdea(){

  }
   function mostrarWeb($ideas){


       echo '<html lang="en">
       <head>
         <!-- Required meta tags -->
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

         <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
         <link rel="stylesheet" href="css/main.css">
         <title>Web 1, part 2</title>
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
                       <a class="nav-link" href="#">Dashboard<span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item  border">
                       <a class="nav-link" href="#" id="ranking-tab">Ranking</a>
                     </li>
                     <li class="nav-item  border">
                       <a class="nav-link" href="#" id="newidea-tab">New Idea</a>
                     </li>
                     <li class="nav-item border">
                       <a class="nav-link" href="#" id="newuser-tab">New User</a>
                     </li>
                     <li class="nav-item border">
                       <a class="nav-link" href="#" id="rules-tab">Rules</a>
                     </li>
                   </ul>
                 </div>
               </nav>
             </header>

             <section class="dashboard border col-12" id="dashboard-section">';
                $this->show($ideas);
                        echo      ' </section>
             <footer class="border col-12" id="footer-id">
               <p>GasSMart Productions</p>
             </footer>
           </div>

         <!-- Optional JavaScript -->
         <!-- jQuery first, then Popper.js, then Bootstrap JS -->
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
         <script type="text/javascript" src="js/main.js">

         </script>
       </body>
     </html>
     ';

  }

  
}


 ?>
