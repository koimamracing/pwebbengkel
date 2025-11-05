<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hazel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
<body class="pt-3">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4 shadow-sm">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="/member">Member</a>
          <a class="nav-link" href="#">Pinjaman</a>
          <a class="nav-link" href="#">Tabungan</a>
          <a class="nav-link" href="#">View Transaction</a>
          <a class="nav-link" href="#">Logout</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Content Section -->
  <div class="container">
    <?= $this->renderSection('content') ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kQTa9l9B+W7MNo1UNpJpxsJvWwFJf4b7iK1cMD1ZgtlAtOk1vErtj22EJMdGII4D" 
    crossorigin="anonymous"></script>
</body>
</html>
