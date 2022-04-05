<!DOCTYPE html>
<html style="height: 100%">

    <?php
        require('../view/head.php');

        require('../model/Mission.php');
        
        $missionModel = new MissionModel();
        $missions = $missionModel->findAll(0, 0);
    ?>
        
    <body style="height: 100vh">

        <?php
        require('../view/header.php');
        ?>
        
        <div class="news container h-75 col-lg-7">

        <form class="mt-5" style="margin: auto" action="../controller/update.php?form=<?php echo $_GET["form"]?>&id=<?php echo $_GET["id"]?>" method="post">

        <?php if($_GET["form"] == "mission") {
            $oneMission = $missionModel->find(intval($_GET["id"]));
        ?>
            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" name="titre" class="form-control" id="titre" value="<?php echo $oneMission["titre"] ?>" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3" value="<?php echo $oneMission["description"] ?>" required><?php echo $oneMission["description"] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="nomcode" class="form-label">Nom de code</label>
                <input type="text" name="nomcode" class="form-control" id="nomcode" value="<?php echo $oneMission["nomcode"] ?>"  required>
            </div>
            <div class="mb-3">
                <label for="pays" class="form-label">Pays de la mision</label>
                <input type="text" name="pays" class="form-control" id="pays" value="<?php echo $oneMission["pays"] ?>" required>
            </div>
            <div class="mb-3">
                <label for="typemission" class="form-label">Type de mission</label>
                <input type="text" name="typemission" class="form-control" id="typemission" value="<?php echo $oneMission["typemission"] ?>"  required>
            </div>
            <div class="mb-3">
                <label for="statut" class="form-label">Statut</label>
                <select name="statut" class="form-select" id="statut" required>
                    <option value="En preparation" <?php if($oneMission["statut"] === "En preparation") echo "selected" ?>>En preparation</option>
                    <option value="En cours" <?php if($oneMission["statut"] === "En cours") echo "selected" ?> >En cours</option>
                    <option value="Terminée" <?php if($oneMission["statut"] === "Terminée") echo "selected" ?>>Terminée</option>
                    <option value="Echec" <?php if($oneMission["statut"] === "Echec") echo "selected" ?>>Echec</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="sperec" class="form-label">Spécialité requise</label>
                <input type="text" name="sperec" class="form-control" id="statut" value="<?php echo $oneMission["sperec"] ?>" required>
            </div>

        <?php
        } elseif($_GET["form"] == "agent") {
            
            require('../model/Agent.php');
            $agentModel = new AgentModel();
            $oneAgent = $agentModel->find(intval($_GET["id"]));
        ?>

            <div class="mb-3 d-flex justify-content-between">
                <div class="mr-2" style="width: 48%">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" name="nom" class="form-control" id="nom" value="<?php echo $oneAgent["nom"] ?>" required>
                </div>
                <div class="ml-2" style="width: 48%">
                    <label for="prenom" class="form-label">Prenom</label>
                    <input type="text" name="prenom" class="form-control" id="prenom" value="<?php echo $oneAgent["prenom"] ?>" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="naissance">Veuillez choisir votre date de naissance :</label>
                <input type="date" name="naissance" min="1922-01-01" max="2018-01-01" id="naissance" value="<?php echo $oneAgent["naissance"] ?>" required>
            </div>
            <div class="mb-3">
                <label for="codeid" class="form-label">Code de l'agent</label>
                <input type="text" name="codeid" class="form-control" id="codeid" value="<?php echo $oneAgent["codeid"] ?>" required>
            </div>
            <div class="mb-3">
                <label for="nationalite" class="form-label">Nationalite</label>
                <input type="text" name="nationalite" class="form-control" id="nationalite" value="<?php echo $oneAgent["nationalite"] ?>" required>
            </div>
            <div class="mb-3">
                <label for="specialite" class="form-label">Specialite</label>
                <input type="text" name="specialite" class="form-control" id="specialite" value="<?php echo $oneAgent["specialite"] ?>" required>
            </div>
            <div class="mb-3">
                <label for="missionid" class="form-label">Mission</label>
                <select name="missionid" class="form-select" id="missionid">
                    <option selected>Choisir la mission</option>
                <?php foreach($missions as $row) {
                ?>
                    
                    <option <?php if( $oneAgent["missionid"] === $row["id"]) echo "selected" ?> value=<?php echo $row["id"]?>><?php echo $row["titre"] ?></option>
                
                <?php
                }
                ?>
                </select>
            </div>

        <?php 
        } elseif($_GET["form"] == "cible") {

            require('../model/Cible.php');
            $cibleModel = new CibleModel();
            $oneCible = $cibleModel->find(intval($_GET["id"]));
        ?>

            <div class="mb-3 d-flex justify-content-between">
                <div class="mr-2" style="width: 48%">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" name="nom" class="form-control" id="nom" value="<?php echo $oneCible["nom"] ?>" required>
                </div>
                <div class="ml-2" style="width: 48%">
                    <label for="prenom" class="form-label">Prenom</label>
                    <input type="text" name="prenom" class="form-control" id="prenom" value="<?php echo $oneCible["prenom"] ?>" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="naissance">Veuillez choisir votre date de naissance :</label>
                <input type="date" name="naissance" min="1922-01-01" max="2018-01-01" id="naissance" value="<?php echo $oneCible["naissance"] ?>" required>
            </div>
            <div class="mb-3">
                <label for="nomcode" class="form-label">Code de la cible</label>
                <input type="text" name="nomcode" class="form-control" id="nomcode" value="<?php echo $oneCible["nomcode"] ?>" required>
            </div>
            <div class="mb-3">
                <label for="nationalite" class="form-label">Nationalite</label>
                <input type="text" name="nationalite" class="form-control" id="nationalite" value="<?php echo $oneCible["nationalite"] ?>" required>
            </div>
            <div class="mb-3">
                <label for="missionid" class="form-label">Mission</label>
                <select name="missionid" class="form-select" id="missionid">
                    <option selected>Choisir la mission</option>
                <?php foreach($missions as $row) {
                ?>
                    
                    <option <?php if( $oneCible["missionid"] === $row["id"]) echo "selected" ?> value=<?php echo $row["id"]?>><?php echo $row["titre"] ?></option>
                
                <?php
                }
                ?>
                </select>
            </div>

        <?php 
        } elseif($_GET["form"] == "contact") {

            require('../model/Contact.php');
            $contactModel = new ContactModel();
            $oneContact = $contactModel->find(intval($_GET["id"]));
        ?>

            <div class="mb-3 d-flex justify-content-between">
                <div class="mr-2" style="width: 48%">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" name="nom" class="form-control" id="nom" value="<?php echo $oneContact["nom"] ?>" required>
                </div>
                <div class="ml-2" style="width: 48%">
                    <label for="prenom" class="form-label">Prenom</label>
                    <input type="text" name="prenom" class="form-control" id="prenom" value="<?php echo $oneContact["prenom"] ?>"  required>
                </div>
            </div>
            <div class="mb-3">
                <label for="naissance">Veuillez choisir votre date de naissance :</label>
                <input type="date" name="naissance" min="1922-01-01" max="2018-01-01" id="naissance" value="<?php echo $oneContact["naissance"] ?>" required>
            </div>
            <div class="mb-3">
                <label for="codeid" class="form-label">Code du contact</label>
                <input type="text" name="codeid" class="form-control" id="codeid"value="<?php echo $oneContact["codeid"] ?>"  required>
            </div>
            <div class="mb-3">
                <label for="nationalite" class="form-label">Nationalite</label>
                <input type="text" name="nationalite" class="form-control" id="nationalite" value="<?php echo $oneContact["nationalite"] ?>" required>
            </div>
            <div class="mb-3">
                <label for="missionid" class="form-label">Mission</label>
                <select name="missionid" class="form-select" id="missionid">
                    <option selected>Choisir la mission</option>
                <?php foreach($missions as $row) {
                ?>
                    
                    <option <?php if( $oneContact["missionid"] === $row["id"]) echo "selected" ?> value=<?php echo $row["id"]?>><?php echo $row["titre"] ?></option>
                
                <?php
                }
                ?>
                </select>
            </div>
        
        <?php 
        } elseif($_GET["form"] == "planque") {

            require('../model/Planque.php');
            $planqueModel = new PlanqueModel();
            $onePlanque = $planqueModel->find(intval($_GET["id"]));
        ?>
        
            <div class="mb-3">
                <label for="code" class="form-label">Code de la planque</label>
                <input type="text" name="code" class="form-control" id="code" value="<?php echo $oneContact["code"] ?>" required>
            </div>
            <div class="mb-3">
                <label for="adresse" class="form-label">Adresse</label>
                <input type="text" name="adresse" class="form-control" id="adresse" value="<?php echo $oneContact["adresse"] ?>" required>
            </div>
            <div class="mb-3">
                <label for="pays" class="form-label">Pays</label>
                <input type="text" name="pays" class="form-control" id="pays" value="<?php echo $oneContact["pays"] ?>" required>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type de mission</label>
                <input type="text" name="type" class="form-control" id="type" value="<?php echo $oneContact["type"] ?>" required>
            </div>
            <div class="mb-3">
                <label for="missionid" class="form-label">Mission</label>
                <select name="missionid" class="form-select" id="missionid">
                    <option selected>Choisir la mission</option>
                <?php foreach($missions as $row) {
                ?>
                    
                    <option <?php if( $onePlanque["missionid"] === $row["id"]) echo "selected" ?> value=<?php echo $row["id"]?>><?php echo $row["titre"] ?></option>
                
                <?php
                }
                ?>
                </select>
            </div>

        <?php 
        }
        ?>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        

        </div>
        
        <?php
        require('../view/footer.php');
        ?>
    </body>
</html>