<?php
    require_once "../header.php";
?>
<form action="../controller/TaiKhoanController.php?action=dangnhap">
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="ten" id="staticEmail">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
        <input type="password" name="matkhau" class="form-control" id="inputPassword">
        </div>
    </div>
    <button type="submit" class="mb-3 row">
       submit
    </button>
</form>
<?php
    require_once "../footer.php";
?>