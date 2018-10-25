<!DOCTYPE html>

  {include file="header.tpl"}
    <div class="ranking col-12">




      <table>
        <thead class="col-12">
          <th class="col-2">THEME</th>

        </thead>
        {foreach from=$themes item=theme}
          <tr class="col-12">
            <td class="col-2">{$theme['name']}</td>
            <td class="col-2"><a href="deleteTheme/{$theme['id_theme']}">Delete</a></td>
            <td class="col-2"><a href="editTheme/{$theme['id_theme']}">Edit</a></td>
          </tr>

        {/foreach}
        <form class="" action="createTheme" method="post">
          <label for="">Ingrese el nuevo theme</label>
          <input type="text" name="newTheme" value="">
          <button type="submit" name="button">Create</button>
        </form>


  {include file="footer.tpl"}
