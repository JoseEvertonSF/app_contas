<x-layout>
    <div class="content">
        <div class="container-fluid">
            <div class="row page-title align-items-center">
                <div class="col-sm-4 col-xl-6">
                    <h4 class="mb-1 mt-0">Dashboard</h4>
                </div>
            </div>

            <!-- content -->
            <div class="row">
                <div class="col-md-6 col-xl-2">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="media p-3">
                                <div class="media-body">
                                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Saldo</span>
                                    <h2 class="mb-0">R$ {{$saldo['valor']}}</h2>
                                </div>
                                <div class="align-self-center">
                                    <div data-feather="dollar-sign" class="align-self-center icon-dual-success icon-lg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="media p-3">
                                <div class="media-body">
                                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Saldo (simulação)</span>
                                    <h2 class="mb-0">R$ {{$lanc_futuros['valor']}}</h2>
                                </div>
                                <div class="align-self-center">
                                    <div data-feather="alert-circle" class="align-self-center icon-dual-success icon-lg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="media p-3">
                                <div class="media-body">
                                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Fatura NUBANK</span>
                                    <h2 class="mb-0">11</h2>
                                </div>
                                <div class="align-self-center">
                                    <div data-feather="dollar-sign" class="align-self-center icon-dual-danger icon-lg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="media p-3">
                                <div class="media-body">
                                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Fatura Will</span>
                                    <h2 class="mb-0">750</h2>
                                </div>
                                <div class="align-self-center">
                                    <div data-feather="dollar-sign" class="align-self-center icon-dual-danger icon-lg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="media p-3">
                                <div class="media-body">
                                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Despesas FIXAS</span>
                                    <h2 class="mb-0">750</h2>
                                </div>
                                <div class="align-self-center">
                                    <div data-feather="dollar-sign" class="align-self-center icon-dual-danger icon-lg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="media p-3">
                                <div class="media-body">
                                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Contas à pagar</span>
                                    <h2 class="mb-0">750</h2>
                                </div>
                                <div class="align-self-center">
                                    <div data-feather="alert-circle" class="align-self-center icon-dual-success icon-lg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- stats + charts -->
            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body pb-0">
                            <ul class="nav card-nav float-right">
                                <li class="nav-item">
                                    <a class="nav-link text-muted" href="#">Today</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-muted" href="#">7d</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">15d</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-muted" href="#">1m</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-muted" href="#">1y</a>
                                </li>
                            </ul>
                            <h5 class="card-title mb-0 header-title">Revenue</h5>

                            <div id="revenue-chart" class="apex-charts mt-3"  dir="ltr"></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-body pb-0">
                            <h5 class="card-title header-title">Targets</h5>
                            <div id="targets-chart" class="apex-charts mt-3" dir="ltr"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->

            <!-- products -->
            <div class="row">
                <div class="col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mt-0 mb-0 header-title">Sales By Category</h5>
                            <div id="sales-by-category-chart" class="apex-charts mb-0 mt-4" dir="ltr"></div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
                <div class="col-xl-7">
                    <div class="card">
                        <div class="card-body">
                            <a href="" class="btn btn-primary btn-sm float-right">
                                <i class='uil uil-export ml-1'></i> Export
                            </a>
                            <h5 class="card-title mt-0 mb-0 header-title">Recent Orders</h5>

                            <div class="table-responsive mt-4">
                                <table class="table table-hover table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#98754</td>
                                            <td>ASOS Ridley High</td>
                                            <td>Otto B</td>
                                            <td>$79.49</td>
                                            <td><span class="badge badge-soft-warning py-1">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>#98753</td>
                                            <td>Marco Lightweight Shirt</td>
                                            <td>Mark P</td>
                                            <td>$125.49</td>
                                            <td><span class="badge badge-soft-success py-1">Delivered</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#98752</td>
                                            <td>Half Sleeve Shirt</td>
                                            <td>Dave B</td>
                                            <td>$35.49</td>
                                            <td><span class="badge badge-soft-danger py-1">Declined</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#98751</td>
                                            <td>Lightweight Jacket</td>
                                            <td>Shreyu N</td>
                                            <td>$49.49</td>
                                            <td><span class="badge badge-soft-success py-1">Delivered</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#98750</td>
                                            <td>Marco Shoes</td>
                                            <td>Rik N</td>
                                            <td>$69.49</td>
                                            <td><span class="badge badge-soft-danger py-1">Declined</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive-->
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>
            <!-- end row -->
        </div>
    </div> <!-- content -->
</x-layout>