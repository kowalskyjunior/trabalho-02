<?php

require_once './actions/config_consultas.php';
$sql = 'SELECT * FROM clientes';
$stmt = $conn->query($sql);
$consultas = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style/style.css">
    <title>Lista de Consultas</title>
</head>

<body>
    <header>
        <div class="container ">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="#"><img src="assets/images/logo.png" alt="logo-image"></a>
                </div><!--logo-->
                <nav>
                    <ul>
                        <li>Home</li>
                        <li>Find a doctor</li>
                        <li>Apps</li>
                        <li>Testimonials</li>
                        <li>About us</li>
                    </ul>
                </nav>
                <div class="hamburger-icon">
                    <img class="menu-icon" src="https://cdn-icons-png.flaticon.com/128/8182/8182885.png" alt="hamburger-icon">
                </div>
                <div class="menu-mobile">
                    <ul>
                        <li>Home</li>
                        <li>Find a doctor</li>
                        <li>Apps</li>
                        <li>Testimonials</li>
                        <li>About us</li>
                    </ul>
                </div><!--menu-mobile-->
            </div>
        </div><!--container-->
    </header>

    <div class="table-responsive">
    <table class="table container table-bordered border border-dark text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
                <th scope="col">Data</th>
                <th scope="col">Horário</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($consultas as $clientes) { ?>
                <tr>
                    <td><?php echo $clientes['id']; ?></td>
                    <td><?php echo $clientes['nome']; ?></td>
                    <td><?php echo $clientes['cpf']; ?></td>
                    <td><?php echo $clientes['email']; ?></td>
                    <td><?php echo $clientes['telefone']; ?></td>
                    <td><?php echo $clientes['data']; ?></td>
                    <td><?php echo $clientes['horario']; ?></td>
                </tr>
            <?php } ?>
    </table>
</div>
</body>

</html>