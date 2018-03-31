<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
</head>
<body>

<h1 align="center">Админка</h1>

<table border="solid">
    <th>ID</th>
    <th>TITLE</th>
    <th>LEAD</th>
    <th>DELETE</th>
    <?php foreach($data as $article) { ?>
    <tr><td>
            <?= $article->id; ?>
        </td>
        <td>
            <?= $article->title; ?>
        </td>
        <td>
            <?= $article->content; ?>
        </td>
        <td><a href="/php2/dz2/admin/delete.php?id=<?php echo $article->id; ?> "> <button>УДАЛИТЬ</button> </a></td>
    <tr>
        <?php }; ?>
    </tr>
</table>

<div class="insert" align="center">
    <h2> ДОБАВЛЕНИЕ НОВОСТИ </h2>
    <form>
        <p><input title="title" name="title" type="text" size="65" required/><strong> <br> Введите новый заголовок новости</strong></p>
        <p><textarea title="content" name="content" rows="10" cols="70" required></textarea><strong> <br> Введите новый текст новости</strong></p>
        <p class="form-submit">
            <input type="submit" formmethod="POST" formaction="/php2/dz2/admin/add.php" value="ДОБАВИТЬ">
        </p>
    </form>
</div>

<div class="edit" align="center">
    <h2> РЕДАКТИРОВАНИЕ НОВОСТИ </h2>
    <form>
        <p><input title="id" name="id" type="number" required/><strong> <br> Выберите ID редактируемой новости </strong></p>
        <p><input title="title" name="title" type="text" size="65" required/><strong> <br> Введите новый заголовок редактируемой новости </strong></p>
        <p><textarea title="content" name="content" rows="10" cols="70" required></textarea><strong> <br> Введите новый текст редактируемой новости </strong></p>
        <p class="form-submit">
            <input type="submit" formmethod="POST" formaction="/php2/dz2/admin/edit.php" value="РЕДАКТИРОВАТЬ">
        </p>
    </form>
</div>

</body>
</html>