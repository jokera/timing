<script type="text/javascript">
    $(document).ready(function() {
        getCompetition($('select#selectCompetitionType').val());
    });
</script>
<form  method="post" action="competitors.php">
    <table id="competitors">
        <thead>
        <th onclick="location.href = '{$sort}bib';"> Bib </th>
        <th onclick ="location.href = '{$sort}name';">Name</th>
        <th onclick="location.href = '{$sort}type';" >Type</th>
            {if (!$competitionID)}
            <th>{html_options  options=$allCompetitions  name='filter' onchange='this.form.submit();' selected=$filter}</th>
            {/if}
        </thead>
        {foreach from=$result item=res}
            <tr>
                <td onclick="location.href = '{$header[$res.competitor_id]}';">{$res.bib}</td>
                <td onclick="location.href = '{$header[$res.competitor_id]}';">{$res.name}</td>
                <td onclick="location.href = '{$header[$res.competitor_id]}';">{$res.type}</td>
                {if (!$competitionID)}
                    <td  id="deleteCompetitor" onclick="confir({$res.competitor_id}, '{$res.name}');" >Delete</td>
                {/if}
            </tr>
        {/foreach}
    </table>
</form>