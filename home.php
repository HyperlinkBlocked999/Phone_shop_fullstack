<?php 

 include "nav.php";
 include "db_connect";

if (!isset($_SESSION["username"])) {
        
    header("Location: login.php");
    exit;

}

$sql = "SELECT
id,
brand,
model,
storage_gb,
price,
quantity,
images

FROM phones
ORDER BY brand, model";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>


</head>

<body>

<header>
<h1>Placeholder Phone_shop</h1>
</header>

<main class="phone-grid">

<?php if ($result && $result->num_rows > 0): ?>
<?php while ($phone = $result->fetch_assoc()): ?>
<section class="phone-card">

<h2>
<?= htmlspecialchars($phone['model']) ?>
</h2>

<p>
Brand:
<?= htmlspecialchars($phone['brand']) ?>
</p>

<p>
Storage:
<?= htmlspecialchars($phone['storage_gb']) ?>
</p>

<p class="price">
Price:
<?= htmlspecialchars($phone['price']) ?>
</p>

<p>
Quantity:
<?= htmlspecialchars($phone['quantity']) ?>
</p>

<p>
<img src="<?php echo htmlspecialchars($phone['images']); ?>" alt="<?php echo htmlspecialchars($phone['model']); ?> Image">
</p>

</section>

<?php endwhile; ?>

<?php else: ?>

<p>No Phones were found.</p>

<?php endif; ?>

</main>

</body>
</html>

<?php $conn->close(); ?>

