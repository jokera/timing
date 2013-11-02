<form  method="post" action="competitions.php" id ="addCompetition">
    <table>
        <tr><td>Name:</td><td> <input type="text" name="name"><br></td></tr>
        <tr><td>Place:</td><td> <input type="text" name="place"><br></td></tr>
        <tr><td>Date:</td><td> <input type="text" id="datepicker" name="date"><br></td></tr>
        <tr><td>Type: </td><td>
                {html_options options=$competitions  name='type' selected=$filter}
            </td></tr>
        <input type="hidden" value="1" name="isAdded">
        <tr><td></td><td><input type="submit" value="Add"></td></tr>
    </table>
</form>