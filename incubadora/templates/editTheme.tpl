<!DOCTYPE html>

  {include file="header.tpl"}
    <div class="ranking col-12">

      <form class="" action="saveEditTheme" method="post">
      <input type="hidden" class="form-control" id="idForm" name="idForm" value="{$theme['id_theme']}">

      <table>
        <thead class="col-12">
          <th class="col-2">THEME</th>

        </thead>

          <tr class="col-12">
            <td class="col-2">{$theme['name']}</td>
          </tr>


        <label class="label-form" for="">Nuevo nombre Theme:</label>
        <input type="text" name="newName" value="">
        <button type="submit" name="button">edit name</button>
        </form>

  {include file="footer.tpl"}
