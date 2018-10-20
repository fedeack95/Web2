{include file="header.tpl"}
<div class="row">
  <div class="col-12">
    <form class="" action="rankingTheme" method="post">
    <select name = "theme" >
      <option value="social">Social</option>
      <option value="politics">Politics</option>
      <option value="leisure">Leisure</option>
      <option value="other">Other</option>
    </select>
    <button type="submit" name="button">Filter</button>
      </form>
    </div>
  </div>


    <div class="ranking col-12">
      <table>
        <thead class="col-12">
          <th class="col-2">Name</th>
          <th class="col-2">Creator</th>
          <th class="col-2">Theme</th>
          <th class="col-2">Likes</th>
          <th class="col-2">Donnations</th>
          <th class="col-2">Bets</th>
          <th class="col-2">Comments</th>
        </thead>
        {foreach from=$ranking item=row}
          <tr class="col-12">
            <td class="col-2">{$row['name']}</td>
            <td class="col-2">{$row['creator']}</td>
            <td class="col-2">{$row['theme']}</td>
            <td class="col-2">{$row['likes']}</td>
            <td class="col-2">{$row['donattion']}</td>
            <td class="col-2">{$row['bet']}</td>
            <td class="col-2">{$row['comments']}</td>
            <td class="col-2"><a href="seeIdeaComments/{$idea['id_idea']}">Check</a></td>
          </tr>

        {/foreach}

      </table>
    </div>

{include file="footer.tpl"}
