


<?php
if(isset($_SESSION['status']) && $_SESSION['status'] !='')
{
  echo $_SESSION['status'];
  ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong></strong> <?php echo $_SESSION['status']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  <?php
  unset($_SESSION['status']);
}
?>
<!-- MODAL -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Votre avis nous interesse!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="avis.php" method="POST" id="modal">
      <div class="modal-body">
        
        <div class="mb-5">
         <label for="pseudo" class="form-label">Pseudo</label>
         <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="mon surnom">
         <small></small>
        </div>
        <div class="mb-5">
        <label for="comment" class="form-label">Commentaire</label>
        <textarea class="form-control" id="comment"name="comment" rows="8"></textarea>
        <small></small>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">X</button>
        <button type="submit" name="envoi" class="button-green">Envoi</button>
      </div>
    </div>
     </form>
  </div>
</div>

<!-- Button trigger modal -->
 <div class="container-button-modal">
 <button type="button" class="button-orange" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Donner mon avis
</button>  
 </div>


<script src="../js/modal.js"></script>


