<?php


use ABI\controller\Controller;
use \ABI\controller\Auth;



$title='Tableau de bord';


Auth::checkRoleAdmin();
$first_name=$_SESSION['first_name'];
$last_name=$_SESSION['last_name'];

ob_start(); 
?>

<hr class="py-0 my-0">
<div class='row p-2 bonjour mx-0'>
        <div class='col'>
        <div class="p-3 alert alert-success">Vous étes connecté en tant que <?= strtoupper($first_name).' '.strtoupper($last_name); ?></div>

        </div>
        <div class="col text-right">
        <a class="nav-link" href="./index.php?action=logOut" data-toggle="tooltip" title="Se déconnecter">Déconnexion<span class="p-3"><img class="logout"src=".public/IMG/" alt="Icone déconnexion à ajouter"></span></a>

        </div>

</div>

<hr class="py-0 my-0">
<?php
                    if(isset($_GET['successAdd']))
                    {
                ?>
                    <div class="alert alert-success">
                           Utilisateur ajouté avec succés!

                    </div>
                <?php
                    }
                ?>

<div class="row modif text-center mb-4">
        <div class="col">
            <ul class="nav nav flex-column">
              <li class="nav-item">
                  <a href="./index.php?action=dashboard&amp;action3=dashboardList" class="nav-link"><img src="./public/IMG/" alt="Image utilisateurs à créer></a>
                </li>
             <li class="nav-item">
                 <a class="nav-link" href="../index.php?action=dashboard&amp;action3=dashboardList">Afficher les utilisateurs</a>
                </li>   
            </ul>
               
        </div>
        <div class="col">
            <ul class="nav nav flex-column">
              <li class="nav-item">
                  <a href="../index.php?action=dashboard&amp;action3=modifyUser" class="nav-link"><img src="./public/IMG/" alt="Image modifier utilisateurs à créer></a>
                </li>
             <li class="nav-item">
                 <a class="nav-link" href="../index.php?action3=dashboard&amp;action3=modifyUser">Modifier les utilisateurs</a>
                </li>   
            </ul>
               
        </div>
        <div class="col">
            <ul class="nav nav flex-column">
              <li class="nav-item">
                  <a href="../index.php?action=dashboard&amp;action3=addUser" class="nav-link"><img src="./public/IMG/" alt="Image ajouter utilisateurs à créer></a>
                </li>
             <li class="nav-item">
                 <a class="nav-link" href="../index.php?action=dashboard&amp;action3=addUser">Ajouter un utilisateur</a>
                </li>   
            </ul>
               
        </div>
        <div class="col">
            <ul class="nav nav flex-column">
              <li class="nav-item">
                  <a href="../index.php?action=dashboardList" class="nav-link"><img src="./public/IMG/" alt="Image supprimer utilisateurs à créer></a>
                </li>
             <li class="nav-item">
                 <a class="nav-link" href="../index.php?action=dashboardList">Supprimer un utilisateur</a>
                </li>   
            </ul>
               
        </div>
</div>


<?php 
    if(isset($_GET['action3']))
    {

                    if($_GET['action3']==='dashboardList')
                    {
                        Controller::viewpage('./view/pages/listView.php');
                    }
                            
                
                    elseif($_GET['action3']==='addUser')
                    {
                        Controller::viewpage('./view/pages/addUserView.php');
                                
                    }
                    elseif($_GET['action3']==='modifyUser')
                    {
                        Controller::viewpage('./view/pages/modifyUserView.php');
                                
                    }
                                            
    }
                                
?>
   </div>         

    <?php $content=ob_get_clean(); ?>

<?php require 'template_admin.php'; ?>
   

