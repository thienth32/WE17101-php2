@extends('layouts.main')
@section('title', "Tạo mới tài khoản")
@section('content')
<form action="luu-sua-tk?id=<?= $user->id ?>" method="post" enctype="multipart/form-data">
    <div>
        name: <input type="text" name="name" value="<?= $user->name ?>">
    </div>
    <div>
        email: <input type="email" name="email" value="<?= $user->email ?>">
    </div>
    <div>
        Phone number: <input type="text" name="phone_number" value="<?= $user->phone_number ?>">
    </div>
    <div>
        Role: <select name="role_id" >
            <?php foreach($roles as $r ):?>
                <option <?php if($user->role_id == $r->id) echo "selected" ?> value="<?= $r->id ?>"><?= $r->name?></option>
            <?php endforeach?>
        </select>
    </div>
    <div>
        <button type="submit">Tạo tài khoản</button>
    </div>
</form>
@endsection