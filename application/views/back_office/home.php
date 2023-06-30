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
        <div class="col-md-6 grid-margin transparent">
            <div class="row">
            <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-tale">
                <div class="card-body">
                    <p class="mb-4"> Nombre des utilisateurs </p>
                    <p class="fs-30 mb-2"> 45 </p>
                </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-dark-blue">
                <div class="card-body">
                    <p class="mb-4">Total vente tableaux</p>
                    <p class="fs-30 mb-2"> 16 </p>
                </div>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                <div class="card card-light-blue">
                <div class="card-body">
                    <p class="mb-4"> Total Chiffre d'Affaire </p>
                    <p class="fs-30 mb-2"> Ar 125 000 </p>
                </div>
                </div>
            </div>
            <div class="col-md-6 stretch-card transparent">
                <div class="card card-light-danger">
                <div class="card-body">
                    <p class="mb-4"> Total des charges </p>
                    <p class="fs-30 mb-2"> Ar 10 000 </p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-5 grid-margin stretch-card">
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
                    <tr>
                        <td class="pl-0">Antsa</td>
                        <td class="text-muted"> 4 </td>
                        <td><p class="mb-0"><span class="font-weight-bold mr-2"> Ar 150 000 </p></td>
                    </tr>
                    <tr>
                        <td class="pl-0"> Rasata </td>
                        <td class="text-muted"> 5 </td>
                        <td><p class="mb-0"><span class="font-weight-bold mr-2">Ar 200 000 </span></p></td>
                    </tr>
                    <tr>
                        <td class="pl-0"> Pota </td>
                        <td class="text-muted"> 5 </td>
                        <td><p class="mb-0"><span class="font-weight-bold mr-2">Ar 250 000 </span></p></td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-7 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                <p class="card-title"> Report global  </p>
                </div>
                <p class="font-weight-500"> Vision globale entre chiffre d'affaires et charges par mois </p>
                <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                <canvas id="sales-chart"></canvas>
            </div>
            </div>
        </div>
        </div>
    </div>
