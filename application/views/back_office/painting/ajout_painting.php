 <!-- partial -->
 <div class="main-panel">        
    <div class="content-wrapper">
        <h3 class="text-muted" style="margin-left:5%;margin-bottom: 3%"> Nouveau tableau </h3>
        <div class="row align-items-center">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="<?php echo base_url() ?>admin/Painting_ctrl/adding_painting" class="forms-sample" enctype="multipart/form-data">
                            <!-- NOM DU TABLEAU  -->
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nom: </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="paintingname">
                                </div>
                            </div>

                            <!-- ARTISTE  -->
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> Artiste: </label>
                                <div class="col-sm-9">
                                <select name="idartist" class="form-control" id="">
                                    <?php foreach($artistes as $artiste){ ?>
                                        <option value="<?php echo $artiste['idartist']; ?>"> <?php echo $artiste['artistname']; ?> </option>
                                    <?php } ?>
                                </select>
                                </div>
                            </div>

                            <!-- DESCRIPTION  -->
                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Description: </label>
                                <div class="col-sm-9">
                                    <input type="text" name="description" class="form-control" id="exampleInputMobile">
                                </div>
                            </div>

                            <!-- PRICE  -->
                            <div class="form-group row">
                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Prix: </label>
                                <div class="col-sm-9">
                                    <input type="text" name="price" class="form-control" id="exampleInputConfirmPassword2">
                                </div>
                            </div>

                             <!-- DATE ENTRANCE  -->
                             <div class="form-group row">
                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Date entrance : </label>
                                <div class="col-sm-9">
                                    <input type="date" name="entrancedate" class="form-control" id="exampleInputConfirmPassword2">
                                </div>
                            </div>

                            <!-- PHOTO  -->
                            <div class="form-group row">
                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Photo tableau: </label>
                                <div class="col-sm-9">
                                    <input type="file" name="painting_photo" class="form-control" id="exampleInputConfirmPassword2">
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
                        <img src="<?php echo base_url() ?>/assets/images/sable.PNG" alt="people">
                    </div>
                </div>
            </div>
        </div>
