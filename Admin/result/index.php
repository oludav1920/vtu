<?php include($_SERVER["DOCUMENT_ROOT"]."/Admin/head.php") ?>

<?php include($_SERVER["DOCUMENT_ROOT"]."/Admin/left.php") ?>


 <div class="columns2-unequal-middle-div white-bg">      
    <?php
    echo "<hr/>";
        include($_SERVER["DOCUMENT_ROOT"]."/Controller/ResultfetchController.php");
        $backendResponseDecode = json_decode($backendResponse, true);
        if($backendResponseDecode["status"] =="success"){
            $response = $backendResponseDecode["response"];

            echo '<table style="width:100%;">';
                echo '<th>';
                echo '<tr>';
                echo '<th>'; 
                echo 'RESULTPLAN';
                echo '</th>';
                echo '<th>'; 
                echo 'DISCOUNT';
                echo '</th>';
                echo '<th>'; 
                echo 'API';
                echo '</th>';
                echo '<th>'; 
                echo 'STATUS';
                echo '</th>';
                echo '<th>'; 
                echo 'EDIT';
                echo '</th>';
                echo '<th>'; 
                echo 'REMOVE';
                echo '</th>';
                echo '</tr>';
                

            for($i = 0; $i < count($response); $i++){
                $ind = $response[$i]["id"];
                $nato = $response[$i]["result"];
                $disto = $response[$i]["discount"];
                $ato = $response[$i]["api"];
                $stato = $response[$i]["stat"];
                //echo "$nato $stato $disto $ato";
                //echo "<hr/>";
                
                echo '<tr>';
                echo '<td style="border:1px; margin-left: 5%;">'; 
                echo $nato;
                echo '</td>';
                echo '<td>'; 
                echo $disto;
                echo '</td>';
                echo '<td>'; 
                echo $ato;
                echo '</td>';
                echo '<td>'; 
                echo $stato;
                echo '</td>';
                echo '<td>'; 
                echo '<a href="/Admin/result/resultedit.php?net='.$ind.'">';
                echo '<button>Edit</button>';
                echo '</a>';
                echo '</td>';
                echo '<td>'; 
                echo '<a href="/Controller/ResultdeleteController.php?user='.$ind.'">';
                echo '<button>Delete</button>';
                echo '</a>';
                echo '</td>';
                echo '</tr>';
            }
            echo '</table>';
        }
        else{
            echo $backendResponseDecode["response"];
            return;
        }
    ?>
</div>



<?php include($_SERVER["DOCUMENT_ROOT"]."/Admin/foot.php") ?>