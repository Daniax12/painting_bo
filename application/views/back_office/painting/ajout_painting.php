 <!-- partial -->
 <div class="main-panel">        
    <div class="content-wrapper">
        <h3 class="text-muted" style="margin-left:5%;margin-bottom: 3%"> Nouveau tableau </h3>
        <div class="row align-items-center">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample">
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nom: </label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" name="name_painting" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> Artiste: </label>
                                <div class="col-sm-9">
                                <select name="artiste_id" class="form-control" name="" id="">
                                    <option value=""> Ansta </option>
                                    <option value=""> Rasata </option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Description: </label>
                                <div class="col-sm-9">
                                <input type="text" name="description" class="form-control" id="exampleInputMobile" placeholder=" Biographie ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Prix: </label>
                                <div class="col-sm-9">
                                <input type="text" name="price" class="form-control" id="exampleInputConfirmPassword2" placeholder="Adresse">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Photo tableau: </label>
                                <div class="col-sm-9">
                                <input type="file" name="painting_photo" class="form-control" id="exampleInputConfirmPassword2" placeholder="Adresse">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Enregistrer</button>
                            <button class="btn btn-light">Cancel</button>
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
