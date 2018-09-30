<?php

/**
 *
 */
class IdeasView
{



  function show($ideas){
    foreach($ideas as $idea)
      echo $idea->name;
  }
}


 ?>
