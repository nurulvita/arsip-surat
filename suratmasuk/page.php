<?php
    // Tentukan jumlah data per halaman
    $dataPerPage = 10;

    // Hitung total data
    $queryTotal = "SELECT COUNT(*) AS total FROM surat";
    $resultTotal = mysqli_query($con, $queryTotal);
    $rowTotal = mysqli_fetch_assoc($resultTotal);
    $totalData = $rowTotal['total'];

    // Hitung total halaman
    $totalPages = ceil($totalData / $dataPerPage);

    // Tentukan halaman saat ini
    $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    // Tentukan offset untuk query
    $offset = ($currentPage - 1) * $dataPerPage;

    // Modifikasi query untuk pagination
    $query = "SELECT * FROM surat LIMIT $offset, $dataPerPage";
    $result = mysqli_query($con, $query);

    if(!$result) {
        die("Query Error : ".mysqli_errno($con)." - ".mysqli_error($con));
    }
?>
