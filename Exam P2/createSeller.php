<?php 
    include "includes/header.php";

    require "includes/config/conn.php";
    $db = connect();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = isset($_POST['id']) ? $_POST['id'] : '';
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
        if ($id && $name && $email && $phone) {
            $sql = "INSERT INTO seller (id, name, email, phone) VALUES ('$id', '$name', '$email', '$phone')";
            // Ejecuta tu consulta
            if (mysqli_query($db, $sql)) {
            } else {
                echo "Error: " . mysqli_error($db);
            }
        } else {
            echo "Por favor, completa todos los campos.";
        }
    }
?>

<section>
    <h2>Sellers Form</h2>
    <div>
        <form action="createSeller.php" method="POST">
            <fieldset>
                <legend>Fill All Form Fields</legend>
                <div>
                    <label for="id">Seller ID</label>
                    <input type="number" id="id" name ="id">
                </div>
                <div>
                    <label for="name">Seller name</label>
                    <input type="text" id="name" name ="name">
                </div>
                <div>
                    <label for="email">Seller email</label>
                    <input type="email" id="email" name ="email">
                </div>
                <div>
                    <label for="phone">Seller Phone</label>
                    <input type="tel" id="phone" name ="phone">
                </div>
                <div>
                    <button type="submit">Create a New Seller</button>
                </div>
            </fieldset>


        </form>

    </div>

</section>