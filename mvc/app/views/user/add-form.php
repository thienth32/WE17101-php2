<form action="luu-tao-tk" method="post" enctype="multipart/form-data">
    <div>
        name: <input type="text" name="name">
    </div>
    <div>
        email: <input type="email" name="email">
    </div>
    <div>
        password: <input type="password" name="password">
    </div>
    <div>
        Phone number: <input type="text" name="phone_number">
    </div>
    <div>
        Role: <select name="role_id" >
            <?php foreach($roles as $r ):?>
                <option value="<?= $r->id ?>"><?= $r->name?></option>
            <?php endforeach?>
        </select>
    </div>
    <div>
        <button type="submit">Tạo tài khoản</button>
    </div>
</form>