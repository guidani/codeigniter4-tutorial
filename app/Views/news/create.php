<h2> <?= esc($title) ?></h2>
<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<form action="/news/create" method="post">
    <?= csrf_field() ?>

    <label for="title">Title</label>
    <input type="text" name="title"/>
    <br/>

    <label for="body">Text</label>
    <textarea name="body" id="" cols="4" rows="45"></textarea><br/>

    <input type="submit" value="Create News Item" name="submit">
</form>