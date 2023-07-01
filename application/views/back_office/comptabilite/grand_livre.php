<div class="main-panel">
    <div class="content-wrapper">
        <div class="d-flex flex-column" style="padding: 0% 0% 3% 3%">
            <h3 class="text-muted" style="margin-bottom:2%"> Grand Livre Comptes: 
                <span class="font-weight-bold text-muted"> 
                    <?php echo $main_compte['numero_compte'] ?> - <?php echo $main_compte['intitule_compte'] ?> 
                </span> 
            </h3>
            <form action="<?php echo base_url() ?>admin/Compte_ctrl/grand_livre_page" method="get">
                <div class="d-flex flex-row">
                    <div class="d-flex flex-row align-items-center">
                        <select name="id_compte_general" class="form-control">
                            <option value=""></option>
                            <?php if($comptes){
                                foreach($comptes as $compte){ ?>
                                    <option value="<?php echo $compte -> id_compte_general ?>"> 
                                        <?php echo $compte -> numero_compte ?> - <?php echo $compte -> intitule_compte ?>
                                    </option>
                                <?php }
                            } ?>
                        </select>
                    </div>
                    <button style="margin-left: 2%" type="submit" class="btn btn-sm btn-primary">
                        <i class="mdi mdi-file-find" style="margin-right: 5px"></i> Rechercher
                    </button>
                </div> 
            </form>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card" style="padding: 0% 3% 3% 3%">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped text-center">
                                <thead>
                                    <tr>
                                        <th> Date </th>
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
                                                <td> <?php echo $ecriture['reference_piece'] ?> </td>
                                                <td> <?php echo $ecriture['libelle_journal'] ?> </td>
                                                <td> <?php echo $ecriture['debit'] ?> </td>
                                                <td> <?php echo $ecriture['credit'] ?> </td>
                                            </tr>
                                        <?php }
                                    } ?>                          
                                </tbody>
                                <tfoot class="font-weight-bold">
                                    <td colspan=3 class="text-right"> Total :</td>
                                    
                                    <td> Ar <?php echo $balance[0] ?> </td>
                                    <td> Ar <?php echo $balance[1] ?> </td>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>