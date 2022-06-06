<form action="" method="get">
    <input type="text" name="keyword" value="<?= $keyword ?>">
    <button type="submit">Tìm kiếm</button>
</form>
<table border="1">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Avatar</th>
        <th>Role</th>
        <th>
            <a href="tao-tk">Add</a>
        </th>
    </thead>
    <tbody>
        <?php foreach($users as $u):?>
            <tr>
                <td><?= $u->id ?></td>
                <td><?= $u->name ?></td>
                <td><?= $u->email ?></td>
                <td><?= $u->avatar ?></td>
                <td><?= $u->role_id ?></td>
                <td>
                    <a href="sua-tk?id=<?= $u->id ?>">Sửa</a>
                    <a href="xoa-tk?id=<?= $u->id ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>