<form action = "<?= base_url('M_user/editsave')?>" method = "post">
<input type = "text" value = "<?= $user->Id?>" name = "id">
<input type = "text" value = "<?= $user->UserName?>" name = "username">

<button type = "submit" value = "simpan" >simpan</button>
</form>