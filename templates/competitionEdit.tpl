<form  method="post" action="competitions.php" class="editCompetition">
    <table>
        <tr><td>Name:</td><td> <input type="text" name="name" value="{$result.name}"<br></td></tr>
        <tr><td>Place:</td><td> <input type="text" name="place" value="{$result.place}"><br></td></tr>
        <tr><td>Date:</td><td><input type="text" name="date"  id="datepicker" value="{$result.date}"></td></tr>
        <tr><td>Type: </td><td> {html_options  options=$competitions  name='type' selected={$result.type}} </td></tr>
        <input type="hidden" value="{$id}" name="isSubmited">
        <tr><td></td><td><input type="submit" value="Save"></td></tr>
    </table>
    <ul class="menu">
        <li  onclick="location.href = 'competitions.php?createStartList={$result['competition_id']}';">
            Edit start list
        </li>
    </ul>
</form>