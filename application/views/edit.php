<h3>Редактирование записи:</h3>
<table id='main-table' class='table table-striped table-hover table-bordered table-condensed'>
<?php
    $masTitle = ['id' => '#', 'title' => 'Название', 'market' => 'Доля на рынке', 'in_projects' => 'В проектах',
    'satisfaction_index' => 'Индекс удовлетворённости',];
    $keys = array_keys($data[0]);
    echo "<thead><tr>";
    for($i = 0; $i < count($keys); $i++){
        echo "<th>".$masTitle[$keys[$i]]."</th>";
    }
    echo "</tr></thead><tbody>";
    foreach($data as $row){
        echo '<tr>';
        for($i = 0; $i < count($keys); $i++) {
            echo '<td>' . $row[$keys[$i]] . '</td>';
        }
        echo "</tr>";
    }
    echo '</tbody>';
?>
</table>
<div class="col-md-offset-3 col-md-5">
    <form id='addLanguage' action="http://localhost/myMVC/main/edit" method="post">
        <input type="hidden" value="<?php echo $data[0]['id'];?>" name="id">
        <div class="form-group">
            <input type="text" class="form-control" id='title' name='title' placeholder="Название">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="market" name='market' placeholder="Доля на рынке">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" id="in_projects" name='in_projects' placeholder="В проектах">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="satisfaction_index" name='satisfaction_index' placeholder="Индекс удовлетворённости">
        </div>

        <div class="col-md-offset-4">
            <input type="submit" class="btn btn-success">
            <button type="reset" class="btn btn-danger">Сбросить</button>
        </div>
    </form>
</div>