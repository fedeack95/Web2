{include file="header.tpl"}
<div class="row">
  <div class="col-12">
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

          <tr class="col-12">
            <td class="col-2">{$ranking['name']}</td>
            <td class="col-2">{$ranking['creator']}</td>
            <td class="col-2">{$ranking['theme']}</td>
            <td class="col-2">{$ranking['likes']}</td>
            <td class="col-2">{$ranking['donattion']}</td>
            <td class="col-2">{$ranking['bet']}</td>
            <td class="col-2">{$ranking['comments']}</td>
            <td class="col-2">
              <form class="" action="safeEditThemeRanking" method="post">
                <input type="hidden" class="form-control" id="idForm" name="idForm" value="{$ranking['id']}">
              <select name = "theme" >
                <option value="social">Social</option>
                <option value="politics">Politics</option>
                <option value="leisure">Leisure</option>
                <option value="other">Other</option>
              </select>
              <button type="submit" name="button">edit</button>

              </div>
            </div>
            </td>
          </tr>


        </form>
      </table>
    </div>

{include file="footer.tpl"}
