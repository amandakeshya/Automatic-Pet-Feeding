<?php
include_once "webapi/config/database.php";

$database = new Database();
$conn = $database->getConnection();

$query = $conn->query("SELECT * FROM station1");
if ($query) {
    $data = $query->fetch(PDO::FETCH_ASSOC);
    if ($data) {
        $servo = $data['servo'];
        $isi_makanan = $data['isi_makanan'];
        $deteksi = $data['deteksi'];
    } else {
        echo "No data found.";
    }
} else {
    // Handle query execution errors
    echo "Error executing the query.";
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Automatic Pet Feeding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/style/style.css">

    <script src="assets/script/script.js"></script>
</head>

<body>
    <header>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Smart Pet Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Lainnya
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Akhir dari Navbar -->

    <main>
        <!-- Judul -->
        <div class="title" style="text">
            <h1>Automatic Pet Feeding</h1>
            <h3>Keshya Niken</h3>
        </div>
        <!-- Akhir dari Judul -->

        <!-- CARD -->
        <div class="container">
            <div class="card text-bg-info mb-3" style="width: 20rem;">
                <div class="card-header"></div>
                <div class="card text-bg-light mb-3" style="max-width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Buka Tutup</h5>
                        <!-- switch -->
                        <div class="form-check form-switch" style="font-size: 50px;">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                                onchange="ubahstatus(this.checked)" <?php if ($servo == 1)
                                    echo "checked";
                                ?>>
                            <label class="form-check-label" for="flexSwitchCheckChecked">
                                <span id="status">
                                    <?php if ($servo == 1)
                                        echo "Buka";
                                    else
                                        echo "Tutup";
                                    ?>
                                </span>
                            </label>
                        </div>
                    </div>
                    <!-- Akhir dari switch  -->
                </div>
            </div>
        </div>

        <div class="container">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                style="padding: 20px; background-color: #0dcaf0; border: 1px solid #0dcaf0">
                INFORMASI
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Informasi</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <table>
                                <tr>
                                    <td>Isi Makanan</td>
                                    <td>: </td>
                                </tr>

                                <tr>
                                    <td>Status</td>
                                    <td>: </td>
                                </tr>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                style="padding: 10px;">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>

<!--
    <footer>
        <p>Copyright&copy;2024 Keshya Niken</p>
    </footer>
-->
</body>
</html>