<table border="1">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Avatar</th>
        <th>Role</th>
    </thead>
    <tbody>
        <?php foreach($users as $u):?>
            <tr>
                <td><?= $u->id ?></td>
                <td><?= $u->name ?></td>
                <td><?= $u->email ?></td>
                <td><?= $u->avatar ?></td>
                <td><?= $u->role_id ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>