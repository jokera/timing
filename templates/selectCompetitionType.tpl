{if ($autoSubmit) }
    <select name="filter"  onchange="this.form.submit();">
        <option value="All">All</option>
    {else}
        <select name="type" id="selectCompetitionType"  onchange="getCompetition($('select#selectCompetitionType').val());">
        {/if}
        {foreach from=$competitionsArray item=v }
            {if ($selected == $v) } 
                <option selected= {$v} > {$v}</option>
            {else} {
                <option value={$v} >{$v}</option> 
            {/if}
        {/foreach}
    </select>