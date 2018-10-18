{include file="header.tpl"}

    <div class="ranking col-12">
      <table>
        <thead class="col-12">
          <th class="col-3">Name</th>
          <th class="col-3">Lastname</th>
          <th class="col-3">User Id</th>
          <th class="col-3">Actions</th>
        </thead>
        {foreach from=$users item=user}
          <tr class="col-12">
            <td class="col-3">{$user['name']}</td>
            <td class="col-3">{$user['lastname']}</td>
            <td class="col-3">{$user['userId']}</td>
            <td class="col-3"><a href="deleteUser/{$user['id_user']}">Delete</a></td>
          </tr>

        {/foreach}

      </table>
    </div>

{include file="footer.tpl"}
