<!DOCTYPE html>
<html style="height: 100%">

    <?php
        require('../view/head.php');
        $arrayTable = array("Missions", "Agents", "Cibles", "Contacts", "Planques");
    ?>
        
    <body style="height: 100vh">
        
        <?php
            require('../view/header.php');
        ?>
        
        <div class="news container my-4 h-75">
            <div class="row mt-5">
                <?php 
                    foreach($arrayTable as &$value) {
                ?>
                
                <div class="col d-flex justify-content-center mb-5">
                    <a class="btn btn-secondary btn-lg" href="../controller/data.php?form=<?php echo $value ?>" role="button"><?php echo $value ?></a>
                </div>

                <?php 
                    } 
                ?>
                
            </div>
        </div>
        
        <?php
            require('../view/footer.php');
        ?>
    </body>
</html>