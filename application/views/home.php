<?php 
$this->load->view('layouts/header');
function tokenTruncate($string, $your_desired_width) {
    $parts = preg_split('/([\s\n\r]+)/', $string, null, PREG_SPLIT_DELIM_CAPTURE);
    $parts_count = count($parts);
    $length = 0;
    $last_part = 0;
    for (; $last_part < $parts_count; ++$last_part) {
        $length += strlen($parts[$last_part]);
        if ($length > $your_desired_width) { break; }
    }
    return implode(array_slice($parts, 0, $last_part));
} 
?>
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
                <h3 class="text-default" style="padding:10px;">Choisissez une catégorie</h3>
                <hr>
                <div class="row" style="padding:10px;">
                    <div class="col-sm-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo base_url();?>assets/uploads/informatiques.jpg" alt="...">
                            <div class="caption" align="center">
                                <p><a href="<?php echo base_url();?>ads/category/Informatique" class="btn btn-link" role="button">Informatiques</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo base_url();?>assets/uploads/immobilier.jpg" alt="...">
                            <div class="caption" align="center">
                                <p><a href="<?php echo base_url();?>ads/category/Immobilier" class="btn btn-link" role="button">Immobilier</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="thumbnail"> 
                            <img src="<?php echo base_url();?>assets/uploads/emplois.jpg" alt="...">
                            <div class="caption" align="center">
                                <p><a href="<?php echo base_url();?>ads/category/Emplois" class="btn btn-link" role="button">Emplois</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo base_url();?>assets/uploads/ventes.jpg" alt="...">
                            <div class="caption" align="center">
                                <p><a href="<?php echo base_url();?>ads/category/Vente Divers" class="btn btn-link" role="button">Vente Divers</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo base_url();?>assets/uploads/animaux.jpg" alt="...">
                            <div class="caption" align="center">
                                <p><a href="<?php echo base_url();?>ads/category/Animaux" class="btn btn-link" role="button">Animaux</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo base_url();?>assets/uploads/vehicules.jpg" alt="...">
                            <div class="caption" align="center">
                                <p><a href="<?php echo base_url();?>ads/category/Véhicules" class="btn btn-link" role="button">Véhicules</a></p>
                            </div>
                        </div>
                    </div>
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
    <div class="container" style="margin-top:50px">
    <h3 class="text-info" style="text-transform:uppercase;font-weight:700">Les dérnieres annonces</h3>
    <hr>
    <div class="container">
        <div class="row">          
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <?php foreach($annonces as $annonce):?>
                            <div class="col-sm-8">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="<?php echo base_url();?>ads/view/<?php echo $annonce->id;?>">
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
                            </div>
                            <?php endforeach;?>
                        </div>
                        <a href="<?php echo base_url();?>ads" class="btn btn-primary pull-right">Toutes les annonces</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('layouts/footer');?>