<?php
require 'db.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Search keyword</title>
    <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="keywordsearch mt-5">
            <?php
            if (isset($_POST['search'])) {
                echo "<b>penelusuran</b> : " . $_POST['search'];
            } else {
                echo "<b>penelusuran</b> : ";
            }
            ?>
        </div>
        <div class="inputsearch mt-2">
            <form action="" method="POST">
                <input type="text" placeholder="masukan kata kunci judul" name="search" id="search">&nbsp;
                <button type="submit" class="btn btn-sm btn-primary">Cari</button>
                <button type="submit" class="btn btn-sm btn-danger float-right" name="refresh">Back</button>
            </form>
        </div>
        <div class="mt-2">
            <table class="table table-striped" id="db_search">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>no hp</th>
                        <th>Kemiripan</th>
                    </tr>
                </thead>
                <?php

                if (isset($_POST['refresh'])) {
                    header("location: index.php");
                } elseif (isset($_POST['search'])) {
                    $sumber = strtolower($_POST['search']);
                    $filtering = explode(" ", $sumber);
                    $tokenizing = preg_replace("/[^a-zA-Z]/", "", $filtering);
                    $jlh_sumber = count($tokenizing);
                    $sql = array();
                    foreach ($tokenizing as $token) {
                        $sql[] = "firstname LIKE '%" . $token . "%'";
                    }
                    $sql = 'SELECT * FROM users WHERE ' . implode(" OR ", $sql);
                    $result = $con->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tbody>";
                        "<tr>";
                        $s_id = $row['user_id'];
                        $fst = $row['firstname'];
                        $s_ln = $row['lastname'];
                        $s_add = $row['address'];
                        $s_ct = $row['contact'];
                        $rowfirtsname = explode(" ", $fst);
                        // result flag1                    
                        $flag1 = array_map(function ($val) use ($rowfirtsname) {
                            return (int) in_array($val, $rowfirtsname);
                        }, $tokenizing);
                        // result flag2            
                        $flag2 = array_map(function ($val) use ($tokenizing) {
                            return (int) in_array($val, $tokenizing);
                        }, $rowfirtsname);

                        if ($flag1 == 1 && $flag2 == 0) {
                            $flaghasil = 0;
                        } else {
                            $flaghasil = $flag1 + $flag2;
                        }

                        $flaghasil = array_sum($flaghasil);
                        $hasilperhitungan = ($flaghasil / $jlh_sumber);
                        if ($hasilperhitungan >= 0.6) {
                            echo "<td>" . $s_id . "</td>";
                            echo "<td>" . $fst . "</td>";
                            echo "<td>" . $s_ln . "</td>";
                            echo "<td>" . $s_add . "</td>";
                            echo "<td>" . $s_ct . "</td>";
                            echo "<td>" . $hasilperhitungan . "</td>";
                        }
                        "</tr>";
                        "</tbody>";
                    }
                } else {
                    $sql = "SELECT * FROM users";
                    $result = $con->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tbody>";
                        "<tr>";
                        echo "<td>" . $row['user_id'] . "</td>";
                        echo "<td>" . $row['firstname'] . "</td>";
                        echo "<td>" . $row['lastname'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td>" . $row['contact'] . "</td>";
                        echo "<td>0</td>";
                        "</tr>";
                        "</tbody>";
                    }
                }
                ?>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
