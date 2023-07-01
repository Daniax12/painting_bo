<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold text-muted"> Bienvenue Admin </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="margin-bottom:3%; margin-top:-1.5%">      
                <div class="card-people">
                    <img src="<?php echo base_url() ?>/assets/images/ddd.PNG" alt="people">
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title mb-0"> Ventes par artistes </p>
                        <p></p>
                        <div class="table-responsive">
                        <table class="table table-borderless text-center">
                            <thead>
                                <tr>
                                    <th class="pl-0  pb-2 border-bottom"> Artistes </th>
                                    <th class="border-bottom pb-2"> Ventes tableaux </th>
                                    <th class="border-bottom pb-2"> Prix total </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($artiste_sales){
                                    foreach($artiste_sales as $sales){ ?>
                                        <tr>
                                            <td> <?php echo $sales['artistname'] ?> </td>
                                            <td> <?php echo $sales['count'] ?> </td>
                                            <td> Ar <?php echo $sales['prix'] ?> </td>
                                        </tr>
                                    <?php }
                                } ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row col-md-12 grid-margin transparent">            
            <div class="col-md-2 mb-4 stretch-card transparent">
                <div class="card card-tale">
                    <div class="card-body">
                        <p class="mb-4"> Nombre des utilisateurs </p>
                        <p class="fs-30 mb-2"> <?php echo $users ?> </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-4 stretch-card transparent">
                <div class="card card-dark-blue">
                    <div class="card-body">
                        <p class="mb-4">Total vente tableaux</p>
                        <p class="fs-30 mb-2"> <?php echo count($sales) ?> </p>
                    </div>
                </div>
            </div>          
            <div class="col-md-2 mb-4 stretch-card transparent">
                <div class="card card-light-danger">
                    <div class="card-body">
                        <p class="mb-4"> Total des charges </p>
                        <p class="fs-30 mb-2"> Ar <?php echo $charges ?> </p>
                    </div>
                </div>
            </div>      
            <div class="col-md-3 mb-4 stretch-card transparent">
                <div class="card card-light-blue">
                    <div class="card-body">
                        <p class="mb-4"> Total Chiffre d'Affaire </p>
                        <p class="fs-30 mb-2"> Ar <?php echo $produits ?> </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4 stretch-card transparent">
                <div class="card  card-dark-blue">
                    <div class="card-body">
                        <p class="mb-4"> Benefice net </p>
                        <p class="fs-30 mb-2"> Ar <?php echo $benefice ?> </p>
                    </div>
                </div>
            </div>     
        </div>
    
