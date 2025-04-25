<?php
require_once 'db.php';

$category = $_GET['category'] ?? '';
$sql = "SELECT * FROM products";
$params = [];

if (in_array($category, ['Dusakabin', 'Lavabo', 'Aksesuar'])) {
    $sql .= " WHERE category = ?";
    $params[] = $category;
}

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$products = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>ManşetDuş – Ürünler</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/site.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container my-5">
  <h2 class="text-center mb-4">Ürünlerimiz</h2>

  <!-- Filtre -->
  <div class="d-flex justify-content-center gap-3 mb-4">
    <a href="product.php" class="btn btn-outline-light <?= $category == '' ? 'active' : '' ?>">Tümü</a>
    <a href="product.php?category=Dusakabin" class="btn btn-outline-light <?= $category == 'Dusakabin' ? 'active' : '' ?>">Duşakabin</a>
    <a href="product.php?category=Lavabo" class="btn btn-outline-light <?= $category == 'Lavabo' ? 'active' : '' ?>">Lavabo</a>
    <a href="product.php?category=Aksesuar" class="btn btn-outline-light <?= $category == 'Aksesuar' ? 'active' : '' ?>">Aksesuarlar</a>
  </div>

  <!-- Ürün Kartları -->
  <div class="row g-4">
    <?php foreach ($products as $product): ?>
      <div class="col-md-4">
        <div class="card bg-dark text-white h-100 shadow-sm">
          <img src="uploads/<?= htmlspecialchars($product['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($product['name']) ?>">
          <div class="card-body">
            <h5 class="card-title"><?= htmlspecialchars($product['name']) ?></h5>
            <p class="card-text"><?= htmlspecialchars($product['description']) ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

</body>
</html>
