<!DOCTYPE html>
<html style="height: 100%">

    <?php
        require('../view/head.php');
    ?>
        
    <body style="height: 100vh">

    <?php
            require('../view/header.php');
        ?>
        
        
        <div class="news container my-4 h-75 col-lg-7">
            <div class="row p-4 mt-5">

                <div class="col-12">
                    <div class="card h-100 p-3">
                    <div class="card-header">
                        <h3 class="card-title my-3" style="font-weight: 600"><?php echo $mission['titre'] ?></h3>
                        <h5 class="card-subtitle mb-2 text-muted"><?php echo $mission['nomcode'] ?></h5>
                    </div>
                        <div class="card-body">
                            
                            <p class="card-text"><?php echo $mission['description'] ?></p>
                            <small class="text-muted mb-4"><?php echo $mission['statut'] ?></small>
                        </div>
                        <div class="card-body">

                            <div style="display: flex; justify-content: space-around">
                            <p class="card-text"><span style="font-weight: 600">Pays : </span><?php echo $mission['pays'] ?></p>
                            <p class="card-text"><span style="font-weight: 600">Type de mission : </span><?php echo $mission['typemission'] ?></p>
                            <p class="card-text"><span style="font-weight: 600">Spécialité requise : </span><?php echo $mission['sperec'] ?></p>
                            </div>
                            
                        </div>
                        <div class="card-footer">
                            
                        <p class="card-text"><span style="font-weight: 600">Date début : </span><?php echo $mission['datedebut'] ?></p>
                        <p class="card-text"><span style="font-weight: 600">Date fin : </span><?php if ((strpos($mission['statut'], "Echec") !== FALSE) or (strpos($mission['statut'], "Terminée") !== FALSE)) {
                            echo $mission['datefin'];
                        } else {
                            echo 'Mission non terminée';
                        } ?>
                        </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

                
        <?php
            require('../view/footer.php');
        ?>

    </body>
</html>