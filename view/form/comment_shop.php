<?php include __DIR__.'/../layouts/header.php' ?>
<div class="content row">
    <?php include __DIR__.'/../layouts/sidebar.php' ?>
    <div class="col-md-6">
        <h1>Отзыв о магазине</h1>
        <form class="form-horizontal" action="comment.php" method="post">
            <div class="form-group" >
                <label class="col-sm-2 control-label" for="inputText">Текст</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="inputText" name="text" rows="3"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="InputName">Имя</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control col-sm-10" id="InputName" name="name" placeholder="Jane Doe">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="InputEmail">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control col-sm-10" id="InputEmail" name="mail" placeholder="jane.doe@example.com">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Send comment</button>
        </form>
    </div>
</div>
<?php include __DIR__.'/../layouts/footer.php' ?>