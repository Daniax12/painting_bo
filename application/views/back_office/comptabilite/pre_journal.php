<div class="main-panel">
    <div class="content-wrapper">
        <div class="d-flex flex-row justify-content-between align-items-center">
            <h3 class="text-muted"> Journal > <?php echo $code_journal['reference_code'] ?> > Numero: <?php echo $journal['id_journal'] ?></h3>
            <a data-bs-toggle="modal" data-bs-target="#staticBackdropEcriture">
                <button class="btn btn-primary">
                    <i class="mdi mdi-lead-pencil" style="margin-right: 5px"></i> ECRIRE ICI
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
                                    <?php if($ecritures_fille){
                                        foreach($ecritures_fille as $ecriture){ ?>
                                            <tr>
                                                <td> <?php echo $ecriture['date_journal'] ?> </td>
                                                <td> <?php echo $ecriture['numero_compte'] ?> : <?php echo $ecriture['intitule_compte'] ?> </td>
                                                <td> <?php echo $ecriture['reference_piece'] ?> </td>
                                                <td> <?php echo $ecriture['libelle_journal'] ?>n </td>
                                                <td> AR <?php echo $ecriture['debit'] ?> </td>
                                                <td> AR <?php echo $ecriture['credit'] ?> </td>
                                            </tr>
                                        <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                        <?php if(isset($fail)){ ?>
                            <div style="color: #C94536; margin-top:1%" class="align-items-center">
                                <i class="mdi mdi-comment-alert"></i> Total debit et credit doivent etre les memes
                            </div>
                        <?php } ?>
                        
                        <div class="d-flex flex-row" style="margin-top:2%">
                            <a href="<?php echo base_url() ?>admin/Journal_ctrl/submiting_journal/<?php echo $code_journal['id_code_journal'] ?>/<?php echo $journal['id_journal'] ?>">
                                <button class="btn btn-outline-primary">
                                    Enregistrer
                                </button>
                            </a>
                            <button class="btn btn-outline-danger" style="margin-left: 5%">
                                Supprimer
                            </button>
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
                                <i class="mdi mdi-lead-pencil" style="margin-right: 5px"></i> Detailler l'ecriture ici:  
                            </h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>  
                        </div>

                        <div class="modal-body text-center">
                            <form action = "<?php echo base_url() ?>admin/Journal_ctrl/adding_ecriture_fille" method="POST">
                                <input type="hidden" name="code_journal" value="<?php echo $code_journal['id_code_journal']  ?>">
                                <input type="hidden" name="id_journal" value="<?php echo $journal['id_journal']  ?>">
                                <!-- COMPTE GENERAL  -->
                               
                                <div class="form-group border border-2" style="padding: 2% 2% 2% 2%">
                                    <div class="d-flex flex-row align-items-center">
                                        <label for="inputText1" style="width: 50%"> Compte General:  </label>
                                        <select name="compte_general_id" class="form-control" required>
                                            <option value=""></option>
                                            <?php if($comptes){
                                                foreach($comptes as $compte){ ?>
                                                    <option value="<?php echo $compte -> id_compte_general ?>">  <?php echo $compte -> numero_compte ?> : <?php echo $compte -> intitule_compte ?> </option>
                                                <?php }
                                            } ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- Montant  -->
                                <div class="form-group border border-2" style="padding: 2% 2% 2% 2%">
                                    <div class="d-flex flex-row align-items-center">
                                        <label for="inputText1" style="width: 30%" > Montant:  </label>
                                        <select  name="credit_debit" class="form-control"  style="width: 40%">
                                            <option value="0"> CREDIT </option>
                                            <option value="1"> DEBIT </option>
                                        </select>
                                        <input type="number" name="montant" class="form-control">
                                    </div>    
                                </div>

                                 <!-- MONNAIE  -->
                                 <!-- <div class="form-group border border-2" style="padding: 2% 2% 2% 2%">
                                    <div class="d-flex flex-row align-items-center">
                                        <label for="inputText1" style="width: 50%"> Monnaie:  </label>
                                        <select name="monnaie_id" class="form-control">
                                            <option value=""> ARIARY </option>
                                            <option value=""> EURO </option>
                                            <option value=""> DOLLAR </option>
                                        </select>
                                    </div>
                                </div> -->

                                <input type="submit" value = "+ Ajouter ecriture" class="btn btn-primary">
                            </form>
                        </div>

                        <div class="modal-footer justify-content-center">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>