<?php

function createList($competitionID) {
    $competitor = new Competitor();
    global $link;
    if ($competitionID) {
        ?>
        <div id='competitorsChoice'>
            <h1 id="startListTitle">Competitors</h1>
            <?php
            $competitor->printCompetitors('NOT', $competitionID);
            //Add competitor to start list with one click
            if (isset($_GET['competitorID']) && !isset($_GET['sortCompetitorsby'])) {
                $query = 'INSERT INTO timing.racelist 
                          (timing.racelist.competitor_id, timing.racelist.competition_id)
                          VALUES(' . $_GET['competitorID'] . ',' . $competitionID . ')';
                mysqli_query($link, $query);
                header('Location: ./competitions.php?createStartList=' . $competitionID . '&order=asc&sortCompetitorsby=' . $_GET['sortCompetitorsby']);
            }
            //remove competitor from start list with one click

            if (isset($_GET['deleteCompetitorID'])) {
                $query = 'DELETE 
                          FROM  racelist 
                          WHERE racelist.competitor_id=' . mysqli_escape_string($link, $_GET['deleteCompetitorID']);
                mysqli_query($link, $query);
                header('Location: ./competitions.php?createStartList=' . $competitionID . '&order=asc&sortCompetitorsby=' . $_GET['sortCompetitorsby']);
            }
            ?>
        </div>
        <div id='competitorsChoiced'>
            <h1 id="startListTitle">Start List</h1>
            <?php
            //print start List
            if (isset($competitionID)) {
                $competitor->printCompetitors('', $competitionID, 'yes');
            }
        }
        ?>
    </div>
    <?php
}

function printResults($id) {
    global $link;
    $query = 'SELECT * FROM  results';
    $query = mysqli_query($link, $query);
    ?>
    <table id='results' >
        <thead>
        <th>Result ID</th>
        <th>Result 1</th>
        <th>Result 2</th>
        <th>Result 3</th>
    </thead>
    <?php
    $row = 0;
    while ($result = mysqli_fetch_assoc($query)) {
        evenRow($row++);
        ?>

        <td><?php echo $result['result_id']; ?></td>
        <td><?php echo $result['result1']; ?></td>
        <td><?php echo $result['result2']; ?></td>
        <td><?php echo $result['result3']; ?></td>

        </tr>
        <?php
    }
}
?>
</table>
