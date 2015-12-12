<div class="col-md-offset-3 col-md-5">
    <form id='addLanguage' action="http://localhost/myMVC/main/add" method="post">
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