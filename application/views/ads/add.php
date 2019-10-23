<?php 
if(!$this->session->userdata("logged")){
    redirect(base_url().'user/login');
} 
$this->load->view('layouts/header');
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
            <?php if($this->session->flashdata('type_not_supported')):?>
                <div class="alert alert-danger">
                    <?php echo $this->session->flashdata('type_not_supported');?>
                </div>
            <?php endif;?>
            <?php if($this->session->flashdata('size_excced')):?>
                <div class="alert alert-danger">
                    <?php echo $this->session->flashdata('size_excced');?>
                </div>
            <?php endif;?>
            <div class="panel panel-default">
                <h4 class="panel-heading text-default" style="padding:10px;margin-top:-1px;">Déposer une annonce</h4>
                <div class="row" style="padding:10px;">
                    <div class="col-md-8 col-md-offset-2">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="cat">Catégorie*</label>
                                <select  name="cat" class="form-control">
                                    <option selected disabled>Veuillez choisir une catégorie</option>
                                    <option value="Informatique & Téchonologie">Informatique & Téchonologie</option>
                                    <option value="Immobilier">Immobilier</option>
                                    <option value="Emplois">Emplois</option>
                                    <option value="Vente Divers">Vente Divers</option>
                                    <option value="Animaux">Animaux</option>
                                    <option value="Véhicules">Véhicules</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="city">Ville*</label>
                                <select  name="city" class="form-control">
                                    <option selected disabled>Veuillez choisir une ville</option>
                                    <option value="Casablanca">Casablanca</option>
                                    <option value="Rabat">Rabat</option>
                                    <option value="Fes">Fes</option>
                                    <option value="Méknes">Méknes</option>
                                    <option value="Oujda">Oujda</option>
                                    <option value="Taza">Taza</option>
                                    <option value="Agadir">Agadir</option>
                                    <option value="Tanger">Tanger</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Titre*</label>
                                <input type="text" name="title" class="form-control" placeholder="Titre">
                            </div>
                            <div class="form-group">
                                <label for="body">Déscription</label>
                                <textarea name="body" id="" cols="30" rows="10" class="form-control" placeholder="Déscription"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="photo">Photo*</label>
                                <input type="file" name="photo" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-default" name="submit" value="Valider">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('layouts/footer');?>