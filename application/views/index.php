
<table id='main-table' class='table table-striped table-hover table-bordered table-condensed'>
<?php
    $masTitle = ['id' => '#', 'title' => 'Название', 'market' => 'Доля на рынке', 'in_projects' => 'В проектах',
        'satisfaction_index' => 'Индекс удовлетворённости',];
    $keys = array_keys($data[0]);
    echo "<thead><tr>";
    for($i = 0; $i < count($keys); $i++){
       echo "<th>".$masTitle[$keys[$i]]."</th>";
    }
    echo '<th></th>';
    echo "</tr></thead><tbody>";
    foreach($data as $row){
        echo '<tr>';
        for($i = 0; $i < count($keys); $i++) {
            echo '<td>' . $row[$keys[$i]] . '</td>';
        }
        echo "<td><div class='col-md-offset-4' style=''><a href='http://localhost/myMVC/main/edit/".$row['id']."' title='Редактирование'><span class='glyphicon glyphicon-pencil'></span></a>";
        echo "<span class='space'></span><a href='http://localhost/myMVC/main/delete/".$row['id']."' title='Удаление'>
                <span class='glyphicon glyphicon-trash'></span></a></div></td></tr>";
    }
    echo '</tbody>';
?>
</table>
