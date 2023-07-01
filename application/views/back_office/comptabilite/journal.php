<div class="main-panel">
    <div class="content-wrapper">
        <div class="d-flex flex-row justify-content-between align-items-center">
            <h3 class="text-muted"> Journal :  <?php  echo $code_journal['reference_code'] ?></h3>
            <a data-bs-toggle="modal" data-bs-target="#staticBackdropEcriture">
                <button class="btn btn-primary">
                    <i class="mdi mdi-lead-pencil" style="margin-right: 5px"></i> AJOUTER
                </button>
            </a>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card" style="padding: 3% 3% 3% 3%">
                <div class="card">
                <div class="card-body">
                   
                    <div class="table-responsive">
                    <table class="table table-striped text-center">
                        <thead>
                            <tr>
                                <th> Date </th>
                                <th> Compte general </th>
                                <th> Piece </th>
                                <th> Description </th>
                                <th> Debit </th>
                                <th> Credit </th>
                            </tr>   
                        </thead>
                        <tbody>
                            <?php if($ecritures){
                                foreach($ecritures as $ecriture){ ?>
                                     <tr>
                                        <td> <?php echo $ecriture['date_journal'] ?> </td>
                                        <td> <?php echo $ecriture['numero_compte'] ?> : <?php echo $ecriture['intitule_compte'] ?> </td>
                                        <td> <?php echo $ecriture['reference_piece'] ?> </td>
                                        <td> <?php echo $ecriture['libelle_journal'] ?> </td>
                                        <td> Ar <?php echo $ecriture['debit'] ?> </td>
                                        <td> Ar <?php echo $ecriture['credit'] ?> </td>
                                    </tr>
                                <?php }
                            } ?>
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
             <!-- INSERTION NOUVEAU ECRITURE -->
            <div class="modal fade" id="staticBackdropEcriture" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title text-center" id="staticBackdropLabel">
                                Inserer details generaux:    
                            </h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>  
                        </div>

                        <div class="modal-body text-center">
                            <form action = "<?php echo base_url() ?>admin/Journal_ctrl/creating_journal" method="POST">
                                <input type="hidden" name="code_journal" value="<?php echo $code_journal['id_code_journal']  ?>">
                                <!-- Date du journal  -->
                               
                                <div class="form-group border border-2" style="padding: 2% 2% 2% 2%">
                                    <div class="d-flex flex-row align-items-center">
                                        <label for="inputText1" style="width: 50%" > Date journal:  </label>
                                        <input id="inputText1" type="date" name="date_journal" class="form-control" required>
                                    </div>
                                </div>

                                <!-- Piece numero  -->
                                <div class="form-group border border-2" style="padding: 2% 2% 2% 2%">
                                    <div class="d-flex flex-row align-items-center">
                                        <label for="inputText1" style="width: 50%" > Piece numero:  </label>
                                        <input id="inputText1" type="text" name="piece_journal" class="form-control" required>
                                    </div>    
                                </div>

                                <!-- Description  -->
                                <div class="form-group border border-2" style="padding: 2% 2% 2% 2%">
                                    <div class="d-flex flex-row align-items-center">
                                        <label for="inputText1" style="width: 50%" > Description:  </label>
                                        <input id="inputText1" type="text" name="libelle" class="form-control" required>
                                    </div>    
                                </div>
                                <input type="submit" value = "+ Ajouter ecriture" class="btn btn-primary">
                            </form>
                        </div>
                        <div class="modal-footer justify-content-center">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>