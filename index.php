<?php require_once './vue/header.php'; ?>

<div class="container mt-5">
    <P style="text-transform:uppercase;text-align:center;font-weight:bolder">Connectez - Vous</p>
    <p class="text-center" ><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5z"/>
</svg></p>
    
    <form method="POST" action="./controller/Connect.php">
      <div class="mb-3">
        <label for="exampleInputEmail1"  class="form-label">Identifiant</label>
        <input type="text" name="identifiant" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mots de Passe</label>
        <input type="password" name="mdp" class="form-control" id="exampleInputPassword1" required>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <div class="text-center">

          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>

</div>


  <?php   require_once './vue/footer.php'; ?>



