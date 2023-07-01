<div class="main-panel">
    <div class="content-wrapper">
        <h3 class="text-muted" style="margin-left:5%"> Nos tableaux </h3>
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
                                        <th> Nom tableau </th>
                                        <th> Artiste </th>
                                        <th> Apercu </th>
                                        <th> Description </th>
                                        <th> Price </th>
                                        <th style="width: 1%" ></th>
                                        <th style="width: 1%" ></th>
                                    </tr>   
                                </thead>
                                <tbody>
                                    <?php foreach($paintings as $painting){ ?>
                                        <tr>
                                            <td> <?php echo $painting['paintingname']; ?> </td>
                                            <td> <?php echo $painting['artistname']; ?> </td>
                                            <td style="width: 1%"> 
                                                <a data-bs-toggle="modal" data-bs-target="#staticBackdropShow<?php echo $painting['idpainting']; ?>">
                                                    <button class="btn btn-outline-primary">
                                                        ...
                                                    </button>                              
                                                </a> 
                                            </td>
                                            <td> <?php echo $painting['description']; ?> </td>
                                            <td> Ar <?php echo $painting['price']; ?> </td>
                                            <td style="width: 1%"> 
                                                <a data-bs-toggle="modal" data-bs-target="#staticBackdropEdit<?php echo $painting['idpainting']; ?>">
                                                    <button class="btn btn-sm btn-outline-secondary">
                                                        <i class="mdi mdi-tooltip-edit" style="color: blue"></i> 
                                                    </button> 
                                                </a>
                                            </td>
                                            <td style="width: 1%"> 
                                                <a data-bs-toggle="modal" data-bs-target="#staticBackdropDelete<?php echo $painting['idpainting']  ?>">
                                                    <button class="btn btn-sm btn-outline-secondary">
                                                        <i class="mdi mdi-archive" style="color: #C94536"></i> 
                                                    </button> 
                                                </a>
                                            </td>
                                        </tr>
                                            <!-- APERCU TABLEAU // MODAL -->
                                        <div class="modal fade" id="staticBackdropShow<?php echo $painting['idpainting']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title text-center" id="staticBackdropLabel">
                                                    Apercu du "<?php echo $painting['paintingname']; ?>"  
                                                    </h3>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>  
                                                </div>
                                                    <div class="modal-people">
                                                        <img style="width: 100%; height:100%" src="<?php echo base_url() ?>/assets/images/tableau/<?php echo $painting['image'] ?>" alt="">                
                                                    </div>
                                                    <div class="modal-footer justify-content-center">
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- DELETE TABLEAU / MODAL -->
                                        <div class="modal fade" id="staticBackdropDelete<?php echo $painting['idpainting']  ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title text-center" id="staticBackdropLabel">
                                                            Voulez vous vraiment supprimer <span class="font-weight-bold"> <?php echo $painting['idpainting'] ?> </span> ?
                                                        </h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>  
                                                    </div>
                                                        <div class="modal-body d-flex flex-row justify-content-center">
                                                            <form action = "<?php echo base_url() ?>admin/Painting_ctrl/deleting_painting" method="POST">
                                                                <!-- idartiste -->
                                                                <input type="hidden" name="idpainting" value="<?php echo $painting['idpainting']; ?>">
                                                                <input type="submit" value = "Oui" class="btn btn-danger">                
                                                            </form>
                                                            <button type="button" class="btn btn-outline-primary" style="margin-left: 5%" data-bs-dismiss="modal" aria-label="Close"> Non </button>
                                                        </div>
                                                    <div class="modal-footer justify-content-center">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- MODIFICATION TABLEAU / MODAL -->
                                        <div class="modal fade" id="staticBackdropEdit<?php echo $painting['idpainting']  ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title text-center" id="staticBackdropLabel">
                                                            Modifier tableau : <span class="font-weight-bold"> <?php echo $painting['paintingname']; ?> </span>
                                                        </h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>  
                                                    </div>
                                                        <div class="modal-body">
                                                            <form action = "<?php echo base_url() ?>admin/Painting_ctrl/modifing_painting" method="POST">
                                                                <!-- ID PAINTING -->
                                                                <input type="hidden" name="idpainting" value="<?php echo $painting['idpainting']; ?>">
                                                                <!-- NOM PAINTING -->
                                                                <div class="form-group border border-2 d-flex flex-row align-items-center" style="padding: 1% 1% 1% 1%">
                                                                    <label for="inputText1" style="width: 50%" class="col-form-label">Nom :  </label>
                                                                    <input id="intitule_compte" type="text" name="paintingname" value="<?php echo $painting['paintingname'] ?>" class="form-control" required>
                                                                </div>

                                                                <!-- DESCRIPTION -->
                                                                <div class="form-group border border-2 d-flex flex-row align-items-center" style="padding: 1% 1% 1% 1%">
                                                                    <label for="inputText1" style="width: 50%" class="col-form-label">Description :  </label>
                                                                    <input id="intitule_compte" type="text" name="description" value="<?php echo $painting['description'] ?>" class="form-control" required>
                                                                </div>

                                                                <!-- PRICE -->
                                                                <div class="form-group border border-2 d-flex flex-row align-items-center" style="padding: 1% 1% 1% 1%">
                                                                    <label for="inputText1" style="width: 50%" class="col-form-label"> Prix :  </label>
                                                                    <input id="intitule_compte" type="number" name="price" value="<?php echo $painting['price'] ?>" class="form-control" required>
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
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>