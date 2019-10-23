<?php $this->load->view('layouts/header');?>
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <form action="<?php echo base_url();?>ads/find" method="post">
                <div class="col-md-3">
                    <input type="text" name="search" placeholder="Que Cherchez Vous?" class="form-control">
                </div>
                <div class="col-md-4">
                    <select  name="cat" class="form-control">
                        <option selected disabled>Veuillez choisir une catégorie</option>
                        <option value="Informatique & Téchnologie">Informatique</option>
                        <option value="Immobilier">Immobilier</option>
                        <option value="Emplois">Emplois</option>
                        <option value="Animaux">Animaux</option>
                        <option value="Vente Divers">Vente Divers</option>
                        <option value="Véhicules">Véhicules</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select  name="city" class="form-control">
                        <option selected disabled>Veuillez choisir une ville</option>
                        <option value="Casablanca">Casablanca</option>
                        <option value="Rabat">Rabat</option>
                        <option value="Fes">Fes</option>
                        <option value="Taza">Taza</option>
                        <option value="Agadir">Agadir</option>
                        <option value="Tanger">Tanger</option>
                        <option value="Oujda">Oujda</option>
                        <option value="Meknés">Meknés</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="panel">
                <h3 class="text-default" style="padding:10px;">
                    <?php 
                      if($this->uri->segment(3) == "V%C3%A9hicules"){
                          echo str_replace('%C3%A9','é',$this->uri->segment(3));
                      }else if($this->uri->segment(3) == "Vente%20Divers"){
                          echo str_replace('%20',' ',$this->uri->segment(3));
                      }else{
                          echo $this->uri->segment(3);
                      }
                    ?> 
                <span class="badge"> <?php echo count($annonces);?></span></h3>
                <hr>
                <div class="row" style="padding:10px;">
                <?php foreach($annonces as $annonce):?>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                               <img class="media-object thumbnail" width="237" src="<?php  echo base_url();?>/assets/uploads/<?php echo $annonce->image;?>" height="150" alt="...">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo $annonce->title;?></h4>
                            <p><?php echo $annonce->body;?></p>
                            <p><a href="<?php echo base_url();?>ads/view/<?php echo $annonce->id;?>" class="btn btn-link">Voir <i class="fa fa-arrow-right"></i></a></p>
                        </div>
                        <div class="media-footer" align="right">
                            <span class="label label-success"><i class="fa fa-tag"></i><?php echo $annonce->category;?></span>
                            <span class="label label-default"><i class="fa fa-user"></i> Belasri imad</span>
                            <span class="label label-warning"><i class="fa fa-calendar"></i> <?php echo $annonce->created;?></span>
                        </div>
                    </div>
                    <hr>
                <?php endforeach;?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h3 class="text-default">Choisissez une ville</h3>
            <hr>
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="<?php echo base_url();?>ads/city/Casablanca" class="text-info"><i class="fa fa-chevron-right"></i> Casablanca</a>
                </li>
                <li class="list-group-item">
                    <a href="<?php echo base_url();?>ads/city/Rabat" class="text-info"><i class="fa fa-chevron-right"></i> Rabat</a></li>
                <li class="list-group-item">
                    <a href="<?php echo base_url();?>ads/city/Fes" class="text-info"><i class="fa fa-chevron-right"></i> Fes</a>
                </li>
                <li class="list-group-item">
                    <a href="<?php echo base_url();?>ads/city/Méknes" class="text-info"><i class="fa fa-chevron-right"></i> Méknes</a>
                </li>
                <li class="list-group-item">
                    <a href="<?php echo base_url();?>ads/city/Tanger" class="text-info"><i class="fa fa-chevron-right"></i> Tanger</a>
                </li>
                <li class="list-group-item">
                    <a href="<?php echo base_url();?>ads/city/Taza" class="text-info"><i class="fa fa-chevron-right"></i> Taza</a>
                </li>
                <li class="list-group-item">
                    <a href="<?php echo base_url();?>ads/city/Oujda" class="text-info"><i class="fa fa-chevron-right"></i> Oujda</a>
                </li>
                <li class="list-group-item">
                    <a href="<?php echo base_url();?>ads/city/Agadir" class="text-info"><i class="fa fa-chevron-right"></i> Agadir</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php $this->load->view('layouts/footer');?>