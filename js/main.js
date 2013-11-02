$(function() {
    $("#datepicker").datepicker({dateFormat: 'yy-mm-dd'});
});

function conf(id)
{
    if (window.confirm("Are you sure?")) {
        location.href = "./competitions.php?delete=" + id;
    }
}

function confir(id, name)
{
    if (window.confirm("Are you sure want to delete " + name + " ?")) {
        location.href = "./competitors.php?delete=" + id;
    }

}

function competitorData() {
    // b = "<?= competitorTypeData(); ?>";
    $("#MyEdit").html("<table><tr><td>Car:</td><td><input type='text' name='car'></td></tr>\n\
                            <tr><td>Class:</td><td><input type='text' name='Class'></td></tr>\n\
                            <tr><td>Div:</td><td><input type='text' name='division'></td></tr></table>");
}

function getCompetition(selected) {

    if (selected == 'Лека атлетика' || selected == 'Ски')
    {
        $("#MyEdit").html("<p>" + selected + "</p>\n\
                      <table><tr><td>Age:</td><td><input type='text' name='age'></td></tr>\n\
                            <tr><td>Sex:</td><td><input type='text' name='sex'></td></tr>\n\
                            <tr><td></td><td><input type='submit' value='Add'></td></tr></table>");
    }
    if (selected == 'Раликрос' || selected == 'Автокрос' || selected == 'Планинско')
    {
        $("#MyEdit").html(" <p>" + selected + "</p><table><tr><td>Car:</td><td><input type='text' name='car'></td></tr>\n\
                            <tr><td>Class:</td><td><input type='text' name='class'></td></tr>\n\
                            <tr><td>Div:</td><td><input type='text' name='division'></td></tr>\n\
                             <tr><td></td><td><input type='submit' value='Add'></td></tr></table>");
    }
    if (selected == 'Други')
    {
        $("#MyEdit").html("<p>" + selected + "</p><tr><td></td><td><input type='submit' value='Add'></td></tr></table>");
    }
}
                