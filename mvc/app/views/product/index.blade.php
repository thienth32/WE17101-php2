<table border="1">
    <thead>
        <th>ID</th>
        <th>Product name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Promotion</th>
    </thead>
    <tbody>
        <?php foreach($products as $p):?>
            <tr>
                <td><?= $p->id ?></td>
                <td><?= $p->name ?></td>
                <td><?= $p->category->name ?></td>
                <td><?= $p->price ?></td>
                <td><?= $p->promotion ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>