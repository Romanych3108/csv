<h2>Форма Загрузки</h2>
    <form action="/add-csv" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <lable>файл с продуктами CSV</lable>
            <input type="file" name="csv">
        </div>
        <input type="submit" class="btn btn-success" value="Загрузить">
    </form>