
<form  method="post" action="competitors.php" id="createCompetitor" >
    <table>
        <tr><td>Bib:</td><td> <input type="text" name="bib"><br></td></tr>
        <tr><td>Name:</td><td> <input type="text" name="name"><br></td></tr>
        <tr><td>Type: </td><td>{html_options id="selectCompetitionType"  onchange="getCompetition($(this).val());" options=$competitions  name='type'   selected=$filter}</td></tr>
        <input type="hidden" value="1" name="isAdded">
    </table>
    <div id="MyEdit">
    </div>
</form>