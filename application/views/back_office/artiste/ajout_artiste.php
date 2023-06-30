 <!-- partial -->
 <div class="main-panel">        
    <div class="content-wrapper">
        <h3 class="text-muted" style="margin-left:5%;margin-bottom: 3%"> Nouveau artiste </h3>
        <div class="row align-items-center">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo base_url() ?>admin/Artiste_ctrl/adding_artistE" method = "POST" class="forms-sample" enctype="multipart/form-data">
                            <!-- Nom -->
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nom : </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name_artiste">
                                </div>
                            </div>

                            <!-- BIOGRAPHIE -->
                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Biographie : </label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" name="biographie" id="exampleInputMobile">
                                </div>
                            </div>

                            <!-- ADRESSE -->
                            <div class="form-group row">
                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Adresse : </label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" name="adresse" id="exampleInputConfirmPassword2">
                                </div>
                            </div>

                            <!-- DATE DE NAISSANCE  -->
                            <div class="form-group row">
                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Date de naissance :</label>
                                <div class="col-sm-9">
                                <input type="date" class="form-control" name="dtn" id="exampleInputConfirmPassword2">
                                </div>
                            </div>

                            <!-- PHOTO  -->
                            <div class="form-group row">
                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Photo :</label>
                                <div class="col-sm-9">
                                <input type="file" class="form-control" name="artiste_img" id="exampleInputConfirmPassword2">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="">
                    <div class="card-people">
                        <img src="<?php echo base_url() ?>/assets/images/reg.jpg" alt="people">
                    </div>
                </div>
            </div>
        </div>
