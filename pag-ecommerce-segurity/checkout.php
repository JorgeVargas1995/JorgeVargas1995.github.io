<?php
include 'components/connect.php'; // Incluye el archivo de conexión a la base de datos
session_start(); // Inicia la sesión

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
   header('location:user_login.php'); // Redirige al usuario a la página de inicio de sesión si no ha iniciado sesión
}

if (isset($_POST['order'])) {

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $method = $_POST['method'];
   $method = filter_var($method, FILTER_SANITIZE_STRING);
   $address = 'flat no. ' . $_POST['flat'] . ', ' . $_POST['street'] . ', ' . $_POST['city'] . ', ' . $_POST['state'] . ', ' . $_POST['country'] . ' - ' . $_POST['pin_code'];
   $address = filter_var($address, FILTER_SANITIZE_STRING);
   $total_products = $_POST['total_products'];
   $total_price = $_POST['total_price'];

   $check_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
   $check_cart->execute([$user_id]);

   if ($check_cart->rowCount() > 0) {

      $insert_order = $conn->prepare("INSERT INTO `orders`(user_id, name, number, email, method, address, total_products, total_price) VALUES(?,?,?,?,?,?,?,?)");
      $insert_order->execute([$user_id, $name, $number, $email, $method, $address, $total_products, $total_price]);

      $delete_cart = $conn->prepare("DELETE FROM `cart` WHERE user_id = ?");
      $delete_cart->execute([$user_id]);

      $message[] = '¡Pedido realizado!';
   } else {
      $message[] = '¡Tu carrito está vacío!';
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pedido</title>

   <!-- Font Awesome CDN -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'components/user_header.php'; ?> <!-- Incluye el encabezado del usuario -->

   <section class="checkout-orders">

      <form action="" method="POST">

         <h3>Tus pedidos</h3>

         <div class="display-orders">
            <?php
            $grand_total = 0;
            $cart_items[] = '';
            $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $select_cart->execute([$user_id]);
            if ($select_cart->rowCount() > 0) {
               while ($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)) {
                  $cart_items[] = $fetch_cart['name'] . ' (' . $fetch_cart['price'] . ' x ' . $fetch_cart['quantity'] . ') - ';
                  $total_products = implode($cart_items);
                  $grand_total += ($fetch_cart['price'] * $fetch_cart['quantity']);
            ?>
                  <p> <?= $fetch_cart['name']; ?> <span>(<?= '$' . $fetch_cart['price'] . ' x ' . $fetch_cart['quantity']; ?>)</span> </p>
            <?php
               }
            } else {
               echo '<p class="empty">¡Tu carrito está vacío!</p>';
            }
            ?>
            <input type="hidden" name="total_products" value="<?= $total_products; ?>">
            <input type="hidden" name="total_price" value="<?= $grand_total; ?>" value="">
            <div class="grand-total">Total general: <span>$<?= $grand_total; ?></span></div>
         </div>

         <h3>Realice su pedido</h3>

         <div class="flex">
            <div class="inputBox">
               <span>Nombre:</span>
               <input type="text" name="name" placeholder="Ingresa tu nombre" class="box" maxlength="20" required>
            </div>
            <div class="inputBox">
               <span>Número:</span>
               <input type="number" name="number" placeholder="Ingresa tu número" class="box" min="0" max="9999999999" onkeypress="if(this.value.length == 10) return false;" required>
            </div>
            <div class="inputBox">
               <span>Correo:</span>
               <input type="email" name="email" placeholder="Ingresa tu correo" class="box" maxlength="50" required>
            </div>
            <div class="inputBox">
               <span>Método de pago:</span>
               <select name="method" class="box" required>
                  <option value="cash on delivery">Efectivo al momento de la entrega</option>
                  <option value="credit card">Tarjeta de crédito</option>
                  <option value="paytm">Paytm</option>
                  <option value="paypal">Paypal</option>
               </select>
            </div>
            <div class="inputBox">
               <span>Dirección línea 1:</span>
               <input type="text" name="flat" placeholder="Ejemplo: número de apartamento" class="box" maxlength="50" required>
            </div>
            <div class="inputBox">
               <span>Dirección línea 2:</span>
               <input type="text" name="street" placeholder="Ejemplo: nombre de la calle" class="box" maxlength="50" required>
            </div>
            <div class="inputBox">
               <span>Ciudad:</span>
               <input type="text" name="city" placeholder="Ejemplo: ciudad" class="box" maxlength="50" required>
            </div>
            <div class="inputBox">
               <span>Estado:</span>
               <input type="text" name="state" placeholder="Ejemplo: estado" class="box" maxlength="50" required>
            </div>
            <div class="inputBox">
               <span>País:</span>
               <input type="text" name="country" placeholder="Ejemplo: país" class="box" maxlength="50" required>
            </div>
            <div class="inputBox">
               <span>Código Postal:</span>
               <input type="number" min="0" name="pin_code" placeholder="Ejemplo: 123456" min="0" max="999999" onkeypress="if(this.value.length == 6) return false;" class="box" required>
            </div>
         </div>

         <input type="submit" name="order" class="btn <?= ($grand_total > 1) ? '' : 'disabled'; ?>" value="Realizar pedido">

      </form>

   </section>

   <?php include 'components/footer.php'; ?> <!-- Incluye el pie de página -->

   <script src="js/script.js"></script>

</body>

</html>
