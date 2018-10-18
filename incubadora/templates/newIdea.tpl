      {include file="header.tpl"}
      <div class="new_idea row">
        <form action="saveNewIdea" method="POST" name="new-idea-form">
          <div class="d-none d-md-block d-lg-block d-xl-block col-12 col-md-6 col-lg-6">
            <img  class="image-new-idea d-none d-md" src="/incubadora/img/ideas/new-idea.jpg" alt="logo" >
          </div>
          <div class="col-12 col-md-6 col-lg-6">

            <div class="row">
              <div class="col-12 column-left col-md-3" >
                <label class="label-form" for="">Name of your idea:</label>
              </div>
              <div class="col-12 column-right col-md-9">
                <input type="text" name="nameForm" value="" id="idea-name">
              </div>

              <div class="col-12 column-left col-md-3">
                <label class="label-form" for="">What type of impact:</label>
              </div>
              <div class="col-12 column-right col-md-9">
                <input type="text" name="impactForm" value="" id="idea-impact">
              </div>

              <div class="col-12 column-left col-md-3">
                <label class="label-form" for="">Theme about:</label>
              </div>
              <div class="col-12 column-right col-md-9">
                <input type="text" name="themeForm" value="" id="idea-theme">
              </div>

              <div class="col-12 column-left col-md-3">
                <label class="label-form" for="">Description:</label>
              </div>
              <div class="col-12 column-right col-md-9">
                <input type="text" name="descriptionForm" value="" id="idea-description"></input>
              </div>



              <div class="col-6 column-left col-md-6">
                <button type="submit"> Send</button>
              </div>


          </div>

        </form>
      </div>
      {include file="footer.tpl"}
