{include file="header.tpl"}
        <section class="dashboard border col-12" >
          <div class="row">

             <div class="col-12 col-lg-12 border idea">
               <div class="row">
                 <div class="col-12 col-lg-6 idea-title">
                  {$idea['name']}
                 </div>
                 <div class="col-12 col-lg-6 idea-subtitle">
                   {$idea['theme']}
                 </div>
                 <div class="col-12 border idea-subtitle">
                   {$idea['impact']}
                 </div>
                 <div class="col-12 col-md-12 col-lg-6 ">
                   {$idea['description']}
                 </div>
                 <div class="col-12 col-md-12 col-lg-6 ">
                  CANTIDAD DE LIKES: {$like['count(quantity)']}
                 </div>
                 <div class="col-12 col-md-12 col-lg-6 ">
                  CANTIDAD DE donnation: {$donnation['sum(quantity)']}
                 </div>
                 <div class="col-12 col-md-12 col-lg-6 ">
                  COMMENT: {$comment['text']}
                 </div>
                 <div class="col-12 col-md-12 col-lg-6 ">
                  BET: {$bet['sum(quantity)']}
                 </div>
                 <div class="">

                  <a href="">HOME</a>
                 </div>

               </div>
             </div>


          </div>

        </section>

  {include file="footer.tpl"}
