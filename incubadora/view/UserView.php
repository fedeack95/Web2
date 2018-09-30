<?php
/**
 *
 */
class UserView
{


  public showForm(){
    echo '
    <div class="new_idea row">
        <div class="d-none d-md-block col-12 col-md-5">
          <img  class="image-new-idea" src="/incubadora/img/ideas/new-user-image.png" alt="logo" >
        </div>
        <div class="col-12 col-md-7">
          <div class="row">
            <div class="column-left col-12 col-md-3">
              <label class="label-form" for="">Name:</label>
            </div>
            <div class="column-right col-12 col-md-9">
              <input type="text" name="name" value="">
            </div>

            <div class="column-left col-12 col-md-3">
              <label class="label-form" for="">Lastname:</label>
            </div>
            <div class="column-right col-12 col-md-9">
              <input type="text" name="lastname" value="">
            </div>

            <div class="column-left col-12 col-md-3">
              <label class="label-form" for="">email:</label>
            </div>
            <div class="column-right col-12 col-md-9">
              <input type="text" name="email" value="">
            </div>

            <div class="column-left col-12 col-md-3">
              <label class="label-form" for="">Tell us about you:</label>
            </div>
            <div class="column-right col-12 col-md-9">
              <textarea name="userabout" rows="15" cols="60" form="new-idea-form"></textarea>
            </div>

            <div class="column-left col-12 col-md-3">
              <label class="label-form" for="">Avatar:</label>
            </div>
            <div class="column-right col-12 col-md-9">
              <input type="file" name="avatar" accept="image/gif, image/jpeg, image/png"><br>
            </div>

            <div class="column-left col-12 col-md-3">
              <input type="button" name="publish" value="Publish">
            </div>
            <div class="column-right col-12 col-md-9">
              <input type="button" name="cancel" value="Cancel">
            </div>
          </div>
        </div>
      </div>
    ';
  }

}




 ?>
