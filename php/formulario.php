<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from user where id = ".$_GET["id"];
$query = $con->query($sql1);
$user = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $user=$r;
  break;
}

  }
?>

<?php if($user!=null):?>

<form role="form" id="actualizar" >
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $user->name; ?>" name="name" required>
  </div>
  <div class="form-group">
    <label for="lastname">Apellido</label>
    <input type="text" class="form-control" value="<?php echo $user->lastname; ?>" name="lastname" required>
  </div>
<input type="hidden" name="id" value="<?php echo $user->id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>

<script>
    $("#actualizar").submit(function(e){
    e.preventDefault();
    $.post("./php/actualizar.php",$("#actualizar").serialize(),function(data){
    });
    $('#editModal').modal('hide');
$('body').removeClass('modal-open');
$('.modal-backdrop').remove();
    loadTabla();
  });
</script>

<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>