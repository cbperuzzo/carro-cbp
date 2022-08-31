<?php

    include("cone.php");

    $lisd = $conn->query('SELECT * FROM viagem');

?>
<table class="sexo">
    <tr>
        <td>id</td> <!-- 0 -->
        <td>modelo</td> <!-- 1 -->
        <td>placa</td> <!-- 2 -->
        <td>nome</td> <!-- 3 -->
        <td>origem</td> <!-- 4 -->
        <td>destino</td> <!-- 5 -->
        <td>km</td> <!-- 6 -->
        <td>litros</td> <!-- 7 -->
        <td>valor do litro</td> <!-- 8 -->

        <td>autonomia</td>
        <td>valor por km</td>
        <td>valor total</td>
    </tr>
        <?php

            foreach($lisd as $row){

                echo "<tr>";
                echo "<td>".$row[0]."</td>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[2]."</td>";
                echo "<td>".$row[3]."</td>";
                echo "<td>".$row[4]."</td>";
                echo "<td>".$row[5]."</td>";
                echo "<td>".$row[6]."</td>";
                echo "<td>".$row[7]."</td>";
                echo "<td>".$row[8]."</td>";

                $auto = $row[6]/$row[7];

                $vkm = $row[7]/$row[6];

                $vkm = $vkm * $row[8];

                $vt = $row[8] * $row[7];

                echo "<td>".$auto."</td>";
                echo "<td>".$vkm."</td>";
                echo "<td>".$vt."</td>";
                echo "</tr>";

            }
        
        ?>
</table>

