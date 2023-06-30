<div class="main-panel">
    <div class="content-wrapper">
        <div class="d-flex flex-row justify-content-between align-items-center">
            <h3 class="text-muted"> Journal de VENTE / Numero: JOU/12/12/2023/001</h3>
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
                                    <tr>
                                        <td> 2023-12-12 </td>
                                        <td> 602: Location </td>
                                        <td> PC1234 </td>
                                        <td> Paiement location </td>
                                        <td> Ar 1000 </td>
                                        <td>  </td>
                                    </tr>
                                    <tr>
                                        <td> 2023-12-12 </td>
                                        <td> 411: FRN Local </td>
                                        <td> PC1234 </td>
                                        <td> Paiement location </td>
                                        <td>  </td>
                                        <td> Ar 1000 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div style="color: #C94536; margin-top:1%" class="align-items-center">
                            <i class="mdi mdi-comment-alert"></i> Total debit et credit doivent etre les memes
                        </div>
                        <div class="d-flex flex-row" style="margin-top:2%">
                            <button class="btn btn-outline-primary">
                                Enregistrer
                            </button>
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
                            <form action = "<?php echo site_url("index.php/Journal_ctrl/insert_new_journal/") ?>" method="POST">
                                <!-- <input type="hidden" name="code_journal" value="<?php // echo $main_code_journal['id_code_journal']  ?>"> -->
                                <!-- Date du journal  -->
                               
                                <div class="form-group border border-2" style="padding: 2% 2% 2% 2%">
                                    <div class="d-flex flex-row align-items-center">
                                        <label for="inputText1" style="width: 50%"> Compte General:  </label>
                                        <select name="compte_general_id" class="form-control">
                                            <option value=""></option>
                                            <option value=""> 601: Achat marchadise </option>
                                            <option value=""> 602: Location appareil photo </option>
                                            <option value=""> 602: Location atelier </option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Montant  -->
                                <div class="form-group border border-2" style="padding: 2% 2% 2% 2%">
                                    <div class="d-flex flex-row align-items-center">
                                        <label for="inputText1" style="width: 30%" > Montant:  </label>
                                        <select  name="compte_general_id" class="form-control"  style="width: 40%">
                                            <option value=""> CREDIT </option>
                                            <option value=""> DEBIT </option>
                                        </select>
                                        <input type="number" name="montant" class="form-control">
                                    </div>    
                                </div>

                                 <!-- MONNAIE  -->
                                 <div class="form-group border border-2" style="padding: 2% 2% 2% 2%">
                                    <div class="d-flex flex-row align-items-center">
                                        <label for="inputText1" style="width: 50%"> Monnaie:  </label>
                                        <select name="monnaie_id" class="form-control">
                                            <option value=""> ARIARY </option>
                                            <option value=""> EURO </option>
                                            <option value=""> DOLLAR </option>
                                        </select>
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