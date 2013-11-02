<div id="editCompetitor">
    <form  method="post" action="competitors.php" >
        <table>
            <tr><td>Bib:</td><td> <input type="text" name="bib" value="{$result['bib']}"<br></td></tr>
            <tr><td>Name:</td><td> <input type="text" name="name" value="{$result['name']}"<br></td></tr>
            <tr><td>Type: </td><td>{html_options  options=$competitions  name='type' selected=$result['type']}</td></tr>
            <input type="hidden" value="{$id}" name="isSubmited">
            <tr><td></td><td><input type="submit" value="Save"></td></tr>
        </table>
    </form>
</div>
