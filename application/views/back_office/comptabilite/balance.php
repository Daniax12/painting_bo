<div class="main-panel">
    <div class="content-wrapper">
        <div class="d-flex flex-column" style="padding: 0% 0% 0% 3%">
            <h3 class="text-muted" style="margin-bottom:2%"> BALANCE GENERAL </h3>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card" style="padding: 0% 3% 3% 3%">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th> NUMERO </th>
                                        <th> DESCRIPTION </th>
                                        <th> DEBIT </th>
                                        <th> CREDIT </th>
                                    </tr>   
                                </thead>
                                <tbody>
                                    <?php if($ecritures){
                                        foreach($ecritures as $ecriture){ ?>
                                            <tr>
                                                <td> <?php echo $ecriture[0]->numero_compte ?>  </td>
                                                <td> <?php echo $ecriture[0]->intitule_compte ?> </td>
                                                <td class="text-right"> Ar <?php echo $ecriture[1] ?> </td>
                                                <td class="text-right"> Ar <?php echo $ecriture[2] ?> </td>
                                            </tr>
                                        <?php }
                                    } ?>
                                </tbody>
                                <tfoot class="font-weight-bold">
                                    <td colspan=2 class="text-right"> Total :</td>
                                    <td class="text-right"> Ar <?php echo $total_balance[0] ?> </td>
                                    <td class="text-right"> Ar <?php echo $total_balance[1] ?> </td>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>