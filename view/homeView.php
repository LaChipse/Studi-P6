<!DOCTYPE html>
<html style="height: 100%">

    <?php
        require('../view/head.php');
    ?>
        
    <body style="height: 100vh">
        
        <?php
            require('../view/header.php');
        ?>
        
        <div class="news container my-4 h-75">

            <h1>Les Missions :</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">

            <?php

                foreach($missions as $row) {
            ?>

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title mb-4" style="font-weight: 600"><?php echo $row['titre'] ?></h5>
                            <p class="card-text"><?php echo $row['description'] ?></p>
                            <small class="text-muted"><?php echo $row['statut'] ?></small>
                            
                        </div>
                        <div class="card-footer">
                            
                            <a href="../controller/onemission.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Show details</a>
                        </div>
                    </div>
                </div>

            <?php
                }
            ?>

            </div>

        </div>
        
        <?php
            $pagination_urls = '';
            $pagination_urls .= "<a href='../controller/home.php?page=1'>First </a>";

            if ($page != 1) {
                $pagination_urls .= "&nbsp;&nbsp;<a href='../controller/home.php?page=". ($page - 1) . "'>Previous</a>";
            } else {
                $pagination_urls .= "&nbsp;&nbsp;<a>Previous</a>";
            }

            if ($page != $total_pages) {
                $pagination_urls .= "&nbsp;&nbsp;<a href='../controller/home.php?page=". ($page + 1) . "'>Next</a>";
            } else {
                $pagination_urls .= "&nbsp;&nbsp;<a>Next</a>";
            }

            $pagination_urls .= "&nbsp;&nbsp;<a href='../controller/home.php?page=" . $total_pages ."'>Last</a>";

            echo "<div class='row row-cols-1 row-cols-md-3 g-4 mt-5'>"
                    . "<div class='pageLink'>" . $pagination_urls . "</div>"
                . "</div>";

            require('../view/footer.php');
        ?>
        <script type="text/javascript" src="../asset/js/tri.js"> 
        </script> 
    </body>
</html>