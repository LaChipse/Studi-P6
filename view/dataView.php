<!DOCTYPE html>
<html style="height: 100%">

    <?php
        require('../view/head.php');
    ?>
        
    <body style="height: 100vh">
    
        <?php
        require('../view/header.php');
        ?>
        
        <div class="news container h-75">

            <a href="../controller/add.php?form=<?php echo $form ?>" class="btn btn-primary mt-5">Add <?php echo $form ?></a>

            <?php
            if (count($data) > 0) 
            {
            ?>

                <div class="row mt-5">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <?php
                                foreach(array_keys($data[0]) as &$params) {
                                ?>
                                    <th scope="col"><?php echo $params ?><i class="fa-solid fa-sort" style="margin-left: 15px"></i></th>
                                <?php 
                                }
                                ?>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        foreach($data as &$objet) {
                        ?>
                            <tr>
                                <?php 
                                foreach($objet as &$value) {
                                ?>
                                    <td class="m-2"><?php if($value === 'infinity') {echo " ";} else echo $value ?></td>
                                <?php 
                                }
                                ?>
                                
                                <td class="actions">
                                    <a href="../controller/update.php?id=<?php echo $objet['id'] ?>&form=<?php echo $form ?>" class="edit m-2"><i class="fa-solid fa-pen"></i></a>
                                    <a href="../controller/delete.php?id=<?php echo $objet['id'] ?>&form=<?php echo $form ?>" class="trash m-2"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php 
                        }
                        ?>
                        </tbody>
                    </table> 
                </div>

            <?php
            } else {
            ?> 

                <h1 class="my-5 text-center"> Sorry, no data found ! </h1>
            <?php 
            }
            ?>

        </div>
        <?php
        $pagination_urls = '';
                $pagination_urls .= "<a href='../controller/data.php?form=$_GET[form]&page=1'>First </a>";

                if ($page != 1) {
                    $pagination_urls .= "&nbsp;&nbsp;<a href='../controller/data.php?form=$_GET[form]&page=". ($page - 1) . "'>Previous</a>";
                } else {
                    $pagination_urls .= "&nbsp;&nbsp;<a>Previous</a>";
                }
    
                if ($page != $total_pages) {
                    $pagination_urls .= "&nbsp;&nbsp;<a href='../controller/data.php?form=$_GET[form]&page=". ($page + 1) . "'>Next</a>";
                } else {
                    $pagination_urls .= "&nbsp;&nbsp;<a>Next</a>";
                }
    
                $pagination_urls .= "&nbsp;&nbsp;<a href='../controller/data.php?form=$_GET[form]&page=" . $total_pages ."'>Last</a>";
    
                echo "<div class='row row-cols-1 row-cols-md-3 g-4 mt-5'>"
                        . "<div class='pageLink'>" . $pagination_urls . "</div>"
                    . "</div>";

        require('../view/footer.php');
        ?>
        <script type="text/javascript" src="../asset/js/tri.js"> 
        </script> 
    </body>
</html>