<?php date_default_timezone_set('Indian/Antananarivo'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <h3 class="text-muted" style="margin-left:5%"> Nos artistes </h3>
        <?php if(isset($fail) == true){ ?>
            <div class="row col-lg-6 border border-2" style="margin-left:2%; background-color: #ea4263; padding: 0.5% 0.5% 0.5% 0.5%; color: white">  
                <i class="mdi mdi-alert-circle-outline" style="margin-right:1%"></i> <?php echo $fail; ?>
            </div>
        <?php } ?>

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card" style="padding: 3% 3% 3% 3%">
                <div class="card">
                    <div class="card-body"> 
                        <div class="table-responsive">
                        <table class="table table-striped text-center">
                            <thead>
                                <tr>
                                    <th> Artiste </th>
                                    <th> Nom </th>
                                    <th> Age </th>
                                    <th> Adresse </th>
                                    <th> Conctact </th>
                                    <th></th>
                                    <th style="width: 1%" ></th>
                                    <th style="width: 1%" ></th>
                                </tr>   
                            </thead>
                            <tbody>
                                <?php if($artistes){
                                    foreach($artistes as $artiste){ ?>
                                        <tr>
                                            <td class="py-1">
                                                <img src="<?php echo base_url() ?>assets/images/artiste/<?php echo $artiste['image']; ?>" alt="image"/>
                                            </td>
                                            <td> <?php echo $artiste['artistname']; ?> </td>
                                            <td> <?php echo $artiste['age']; ?> ans </td>
                                            <td> <?php echo $artiste['adress']; ?> </td>
                                            <td> <?php echo $artiste['email']; ?> </td>
                                            <td> <a href=""> voir... </a> </td>
                                            <td style="width: 1%"> 
                                                <a data-bs-toggle="modal" data-bs-target="#staticBackdropEdit<?php echo $artiste['idartist']  ?>">
                                                    <button class="btn btn-sm btn-outline-secondary">
                                                        <i class="mdi mdi-lead-pencil" style="color: blue"></i> 
                                                    </button> 
                                                </a>
                                            </td>
                                            <td style="width: 1%"> 
                                                <a data-bs-toggle="modal" data-bs-target="#staticBackdropDelete<?php echo $artiste['idartist']  ?>">
                                                    <button class="btn btn-sm btn-outline-secondary">
                                                        <i class="mdi mdi-archive" style="color: #C94536"></i> 
                                                    </button> 
                                                </a>
                                            </td>
                                        </tr>
                                        <!-- DELETE ARTISTE  -->
                                        <div class="modal fade" id="staticBackdropDelete<?php echo $artiste['idartist']  ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title text-center" id="staticBackdropLabel">
                                                            Voulez vous vraiment supprimer <span class="font-weight-bold"> <?php echo $artiste['artistname']; ?> </span> ?
                                                        </h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>  
                                                    </div>
                                                        <div class="modal-body d-flex flex-row justify-content-center">
                                                            <form action = "<?php echo base_url() ?>admin/Artiste_ctrl/deleting_artiste" method="POST">
                                                                <!-- idartiste -->
                                                                <input type="hidden" name="id_artiste" value="<?php echo $artiste['idartist']; ?>">
                                                                <input type="submit" value = "Oui" class="btn btn-danger">                
                                                            </form>
                                                            <button type="button" class="btn btn-outline-primary" style="margin-left: 5%" data-bs-dismiss="modal" aria-label="Close"> Non </button>
                                                        </div>
                                                    <div class="modal-footer justify-content-center">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!--  MODIFIER ARTISTE // MODAL -->
                                        <div class="modal fade" id="staticBackdropEdit<?php echo $artiste['idartist']  ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title text-center" id="staticBackdropLabel">
                                                            Modifier l'artiste : <span class="font-weight-bold"> <?php echo $artiste['artistname']; ?> </span>
                                                        </h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>  
                                                    </div>
                                                        <div class="modal-body">
                                                            <form action = "<?php echo base_url() ?>admin/Artiste_ctrl/modifing_artiste" method="POST">
                                                                <!-- idartiste -->
                                                                <input type="hidden" name="idartist" value="<?php echo $artiste['idartist']; ?>">
                                                                <!-- NOM ARTISTE -->
                                                                <div class="form-group border border-2 d-flex flex-row align-items-center" style="padding: 1% 1% 1% 1%">
                                                                    <label for="inputText1" style="width: 50%" class="col-form-label">Nom :  </label>
                                                                    <input id="intitule_compte" type="text" name="name_artiste" value="<?php echo $artiste['artistname'] ?>" class="form-control" required>
                                                                </div>

                                                                <!-- BIOGRAPHIE -->
                                                                <div class="form-group border border-2 d-flex flex-row align-items-center" style="padding: 1% 1% 1% 1%">
                                                                    <label for="inputText1" style="width: 50%" class="col-form-label">Biographie :  </label>
                                                                    <input id="intitule_compte" type="text" name="biographie" value="<?php echo $artiste['biographie'] ?>" class="form-control" required>
                                                                </div>

                                                                <!-- MODIFIER DATE -->
                                                                <?php $formattedDate = date('Y-m-d', strtotime($artiste['birthdate'])); ?>
                                                                <div class="form-group border border-2 d-flex flex-row align-items-center" style="padding: 1% 1% 1% 1%">
                                                                    <label for="inputText1" style="width: 50%" class="col-form-label"> Date de naissance :  </label>
                                                                    <input id="intitule_compte" type="date" name="dtn" value="<?php echo $formattedDate ?>" class="form-control" required>
                                                                </div>

                                                                <!-- EMAIL -->
                                                                <div class="form-group border border-2 d-flex flex-row align-items-center" style="padding: 1% 1% 1% 1%">
                                                                    <label for="inputText1" style="width: 50%" class="col-form-label"> Email:  </label>
                                                                    <input id="intitule_compte" type="text" name="email" value="<?php echo $artiste['email']; ?>" class="form-control" required>
                                                                </div>

                                                                <!-- ADRESSE -->
                                                                <div class="form-group border border-2 d-flex flex-row align-items-center" style="padding: 1% 1% 1% 1%">
                                                                    <label for="inputText1" style="width: 50%" class="col-form-label"> Adresse:  </label>
                                                                    <input id="intitule_compte" type="text" name="adresse" value="<?php echo $artiste['adress']; ?>" class="form-control" required>
                                                                </div>

                                                                <input type="submit" value = "Modifier" class="btn btn-primary">                
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div class="modal-footer justify-content-center">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                } ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>