<nav class="navbar navbar-dark" style="margin:0px;  background-color:#4183d7;" > 
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
   
           
           
            
          <a href="index.php">  
          <ul class="nav navbar-nav navbar-left" style="margin:0px;" >
            
                <li> <img src="Resources/logo.png" class="img-responsive" alt="Responsive image" style="width:70px; padding:0px ;margin:0px;"></li>
                 <li style="margin-top:5px; font-size:30px;color:white;">   
                 <b>    
                  Annonces-Immobilier</b>
                 
                </li>
             </ul> 
             </a>
           
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            

            <ul class="nav navbar-nav navbar-right" >
              <li class="dropdown">
                        <a href="#" class="dropdown-toggle " style="color:white;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <b>FAQ</b> <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li><a href="articleReaderpage.php">Comment chercher une annonce?</a></li>
                          <li><a href="articleReaderpage.php">Comment ajouter une annonce?</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="articleReaderpage.php">Comment créer un compte? </a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="articleReaderpage.php">Qui somme nous?</a></li>
                        </ul>
                      </li>
                <li><a href="mailto:utilisateur.utili@gmail.com" style="color:white;"><b>Contactez nous</b></a></li>
                <?php
                if(isset($_SESSION['EMAIL'])&&isset($_SESSION['PASSWORD'])){

                 echo ' 
                  <li><a href="deconnexion.php" style="color:white;">Se deconnecter</a></li>
                 <li><button type="button" class="btn btn-info" style="margin-top:10px;" onclick="window.location.href=\'/pfe/mesannonces.php\'">
                 <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                 mes annonces</button></li>';

                }
                else{
                  echo '<li><button type="button" class="btn btn-info" style="margin:10px;" data-toggle="modal" data-target="#connexionModal"
                 <span class=" glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                Se Connecter</button></li>';
                
                }
                ?>

              <li><button type="button" class="btn btn-success" style="margin-top:10px;" onclick="window.location.href='/pfe/inscription.php'">
               <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
              Déposer une annonce</button></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->





        <!-- Modal -->
        <div class="modal fade" id="connexionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content" >
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Se connecter :</h4>
              </div>
              <div class="modal-body" >
              <div class="col-lg-10 col-lg-offset-1">
                  <form method="post" action="login.php">

                       
                           <div class="form-group">
                             <label for="exampleInputEmail1">Email address</label>
                             <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
                           </div>
                           <div class="form-group">
                             <label for="exampleInputPassword1">Password</label>
                             <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Password">
                           </div>
                           <div class="checkbox">
                             <label>
                               <input type="checkbox"> Se souvenir de mon mot de passe
                             </label>
                           </div>

                            <p class="help-block">Vous n'avez pas de compte encore !!
                            <a href="Newuser.php">Inscrivez Vous.</a></p>
                                                 
                    
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
                 <button type="submit" class="btn btn-primary">Se connecter</button>
  </form>
              </div>
            </div>
          </div>
        </div>
      </nav>