<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>exercice 5 partie 7 php</title>
</head>
<body>
  <form class="form" action="index.php" method="post">
    <select class="civility" name="civility">
      <option value="Monsieur" name="Monsieur">Monsieur</option>
      <option value="Madame" name="Madame">Madame</option>
    </select>
    <input type="lastname" name="lastname" placeholder="Nom">
    <input type="firstname" name="firstname" placeholder="Prénom">
    <button type="submit" name="validate">Valider</button>
  </form>
  <p><?php
  if (isset($_POST['civility']) && ($_POST['lastname']) && ($_POST['firstname'])) {
    echo 'Bonjour ' . $_POST['civility'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'];
  }
  ?>
</p>


</body>
</html>
