

{include file="header.tpl"}
        <section class="dashboard border col-12" id="dashboard-section">
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
                 <div class="col-12 col-md-12 col-lg-6 description">
                   {$idea['description']}
                 </div>
                 <div class="col-12 col-md-12 col-lg-6 description">
                  CANTIDAD DE LIKES: {$like['count(quantity)']}
                 </div>
                 <div class="col-12 col-md-12 col-lg-6 description">
                  CANTIDAD DE donnation: {$donnation['sum(quantity)']}
                 </div>
                 <div class="col-12 col-md-12 col-lg-6 description">
                  COMMENT: {$comment['text']}
                 </div>
                 <div class="col-12 col-md-12 col-lg-6 description">
                  BET: {$bet['sum(quantity)']}
                 </div>
                 <div class="">

                  <a href="">HOME</a>
                 </div>

               </div>
             </div>


          </div>

        </section>



            <div class="ranking col-12">
              <table>
                <thead class="col-12">
                  <th class="col-3">Name</th>
                  <th class="col-3">Theme</th>
                  <th class="col-3">Impact</th>
                  <th class="col-3">Description</th>
                </thead>

                  <tr class="col-12">
                    <td class="col-3">{$idea['name']}</td>
                    <td class="col-3">{$idea['theme']}</td>
                    <td class="col-3">{$idea['impact']}</td>
                    <td class="col-3">{$idea['description']}</td>
                    <td class="col-3"><a href="incubadora">HOME</a></td>
                  </tr>



              </table>
            </div>




  {include file="footer.tpl"}
