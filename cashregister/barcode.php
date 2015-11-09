<?php require 'core/init.php';
    
    echo "<div class='print-div'>";
    if(isset($_POST['check'])){
        foreach($_POST['check'] as $value){
            $value = Crytion::decryt64($value);
            echo '<div>';
            echo '<img src="barcode_img.php?num='.$value.'&type=code128&imgtype=png">';
            echo '</div>';
        }
    }
    
    if(isset($_GET['text'])){
        $value = Crytion::decryt64($_GET['text']);
        echo '<div><img src="barcode_img.php?num='.$value.'&type=code128&imgtype=png"></div>';
    }
    
    echo "</div>";
?>

<script src="js/jquery-2.1.0.js"></script>
<script src="js/html2canvas.js"></script>
<script>
    var domElement = document.getElementById('');
    var domElement2 = document.getElementById('');
        html2canvas(domElement, {
          onrendered: function(canvas) {
            domElement2.appendChild(canvas);                                                                                                                   
          }
        });
</script>