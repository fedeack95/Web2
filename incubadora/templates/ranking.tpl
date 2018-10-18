{include file="header.tpl"}

    <div class="ranking col-12">
      <table>
        <thead class="col-12">
          <th class="col-2">Creator</th>
          <th class="col-2">Name</th>
          <th class="col-2">Likes</th>
          <th class="col-2">Donnations</th>
          <th class="col-2">Bets</th>
          <th class="col-2">Comments</th>
        </thead>
        {foreach from=$ideas item=idea}
          <tr class="col-12">
            <td class="col-2">{$idea['creator']}</td>
            <td class="col-2">{$idea['name']}</td>
            <td class="col-2">{$idea['likes']}</td>
            <td class="col-2">{$idea['donnations']}</td>
            <td class="col-2">{$idea['bets']}</td>
            <td class="col-2"><a href="seeIdeaComments/{$idea['id_idea']}">Check</a></td>
          </tr>

        {/foreach}

      </table>
    </div>

{include file="footer.tpl"}
