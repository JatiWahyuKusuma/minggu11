<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Laporan</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <h1 align ="center"> DATA MAHASISWA <h1>
        <br>
        <table>
            <tr>
                <th> ID </th>
                <th> Nama </th>
                <th> Alamat </th>
                <th> Foto </th>
            <tr>
            <?php   
                include "myconnection.php";

                $query = "SELECT * FROM student";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)) {     
            ?>
            <tr>
                <td> <?php echo $row["id"]?></td>
                <td> <?php echo $row["name"]?></td>
                <td> <?php echo $row["addres"]?></td>
                <td> <img src=" img/<?php echo $row["Foto"]?>" alt=""></td>
            </tr>
            <?php
                    }
                }
            ?>
        </table>
        <script>
            window.print();
        </script>
    </form>
    </body>
</html>