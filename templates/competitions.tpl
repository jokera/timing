<form action="competitions.php" method="post">
    <table id="competitions">
        <thead>
        <th onclick="location.href = '{$sortby}name';" >Name</th>
        <th onclick="location.href = '{$sortby}place';" >Place</th>
        <th onclick="location.href = '{$sortby}date';" >Date</th>
        <th onclick="location.href = '{$sortby}type';" >Type</th>
        <th width="1%" > {html_options  options=$allCompetitions  name='filter' onchange='this.form.submit();' selected=$filter}</th>
        </thead>
        {foreach from=$competitions item=result}
            {if (!$disabledEdit) }
                {$role = "./competitions.php?editCompetitionID=`$result.competition_id`"}
            {else}
                {$role = "./results.php?competitionID=`$result.competition_id`"}
            {/if}
            <tr >
                <td onclick="location.href = '{$role}';">{$result['name']}</td>
                <td onclick="location.href = '{$role}';">{$result['place']}</td>
                <td onclick="location.href = '{$role}';">{$result['date']}</td>
                <td onclick="location.href = '{$role}';">{$result['type']}</td>
                {if (!$disabledEdit)}
                    <td  id="deleteCompetition" onclick=conf({$result['competition_id']}); >Delete</td>
                {/if}
            </tr>
        {/foreach}
    </table>
</form>