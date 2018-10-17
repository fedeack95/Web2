<!doctype html>


  {include file="header.tpl"}
        <section class="dashboard border col-12" id="dashboard-section">
          <div class="row">
            {foreach from=$ideas item=idea}
             <div class="col-12 col-lg-6 border idea">
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
                 <div class="col-12 col-md-12 col-lg-6 description">
                   {$idea['description']}
                 </div>
                 <div class="">
                   <a href="delete/{$idea['id_idea']}">DELETE</a>
                  <a href="edit/{$idea['id_idea']}">EDITAR</a>
                 </div>

               </div>
             </div>

            {/foreach}
          </div>

        </section>

      

  {include file="footer.tpl"}
