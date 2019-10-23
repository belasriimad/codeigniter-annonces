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
    <hr>
    <div class="row">
        <div class="col-md-8">
            <div class="panel">
                <h3 class="text-default" style="padding:10px;"><?php echo $annonce->title;?></h3>
                <hr>
                <div class="row" style="padding:10px;">
                    <div class="row">
                        <div class="col-sm-10" style="margin-left:20px;">
                            <div class="">
                                <a href="<?php echo ($last != false) ? base_url().'ads/view/'.$last->id : "#";?>" class="btn btn-default pull-left"><i class="fa chevron-left"></i> Précedente</a>
                                <a href="<?php echo ($next != false) ? base_url().'ads/view/'.$next->id : "#";?>" class="btn btn-default pull-right"><i class="fa chevron-right"></i> Suivante</a>
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="container" style="margin-bottom:10px;">
                           <img class="media-object thumbnail" class="thumbnail" src="<?php echo base_url();?>/assets/uploads/<?php echo $annonce->image;?>" alt="...">
                        </div>
                        <div class="media-body">
                            <div class="row">
                                <div class="col-md-10" style="margin-left:15px;">
                                    <blockquote><?php echo $annonce->body;?></blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="media-footer" align="right">
                            <div class="row">
                                <div class="col-md-10" style="margin-left:20px;">
                                    <span class="label label-success"><i class="fa fa-tag"></i> <?php echo $annonce->category;?></span>
                                    <span class="label label-warning"><i class="fa fa-calendar"></i> <?php echo $annonce->created;?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h3 class="text-default">Infos Annonceur</h3>
            <hr>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <p class="text-info"><i class="fa fa-user"></i> <?php echo $annonce->firstname.' '.$annonce->lastname;?></span>
                    <p class="text-info"><i class="fa fa-phone"></i> <?php echo $annonce->Tel;?></p>
                    <p class="text-info"><i class="fa fa-map-marker"></i> <?php echo $annonce->city;?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('layouts/footer');?>