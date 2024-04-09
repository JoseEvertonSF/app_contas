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
                                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Saldo
                                        Atual</span>
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
                                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Saldo + Lançamentos futuros</span>
                                    <h2 class="mb-0">1065</h2>
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
                                    <span class="text-muted text-uppercase font-size-12 font-weight-bold">Fatura NUBANK atual</span>
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

            <!-- widgets -->
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body pt-2">
                            <h5 class="mb-4 header-title">Top Performers</h5>
                            <div class="media border-top pt-3">
                                <img src="assets/images/users/avatar-7.jpg" class="avatar rounded mr-3"
                                    alt="shreyu">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0 font-size-15">Shreyu N</h6>
                                    <h6 class="text-muted font-weight-normal mt-1 mb-3">Senior Sales Guy</h6>
                                </div>
                                <div class="dropdown align-self-center float-right">
                                    <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="uil uil-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i
                                                class="uil uil-edit-alt mr-2"></i>Edit</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i
                                                class="uil uil-exit mr-2"></i>Remove from Team</a>
                                        <div class="dropdown-divider"></div>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                                class="uil uil-trash mr-2"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="media mt-1 border-top pt-3">
                                <img src="assets/images/users/avatar-9.jpg" class="avatar rounded mr-3"
                                    alt="shreyu">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0 font-size-15">Greeva Y</h6>
                                    <h6 class="text-muted font-weight-normal mt-1 mb-3">Social Media Campaign</h6>
                                </div>
                                <div class="dropdown align-self-center float-right">
                                    <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="uil uil-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i
                                                class="uil uil-edit-alt mr-2"></i>Edit</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i
                                                class="uil uil-exit mr-2"></i>Remove from Team</a>
                                        <div class="dropdown-divider"></div>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                                class="uil uil-trash mr-2"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="media mt-1 border-top pt-3">
                                <img src="assets/images/users/avatar-4.jpg" class="avatar rounded mr-3"
                                    alt="shreyu">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0 font-size-15">Nik G</h6>
                                    <h6 class="text-muted font-weight-normal mt-1 mb-3">Inventory Manager</h6>
                                </div>
                                <div class="dropdown align-self-center float-right">
                                    <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="uil uil-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i
                                                class="uil uil-edit-alt mr-2"></i>Edit</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i
                                                class="uil uil-exit mr-2"></i>Remove from Team</a>
                                        <div class="dropdown-divider"></div>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                                class="uil uil-trash mr-2"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="media mt-1 border-top pt-3">
                                <img src="assets/images/users/avatar-1.jpg" class="avatar rounded mr-3"
                                    alt="shreyu">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0 font-size-15">Hardik G</h6>
                                    <h6 class="text-muted font-weight-normal mt-1 mb-3">Sales Person</h6>
                                </div>
                                <div class="dropdown align-self-center float-right">
                                    <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="uil uil-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i
                                                class="uil uil-edit-alt mr-2"></i>Edit</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i
                                                class="uil uil-exit mr-2"></i>Remove from Team</a>
                                        <div class="dropdown-divider"></div>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                                class="uil uil-trash mr-2"></i>Delete</a>
                                    </div>
                                </div>
                            </div>

                            <div class="media mt-1 border-top pt-3">
                                <img src="assets/images/users/avatar-5.jpg" class="avatar rounded mr-3"
                                    alt="shreyu">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0 font-size-15">Stive K</h6>
                                    <h6 class="text-muted font-weight-normal mt-1 mb-1">Sales Person</h6>
                                </div>
                                <div class="dropdown align-self-center float-right">
                                    <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="uil uil-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i
                                                class="uil uil-edit-alt mr-2"></i>Edit</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i
                                                class="uil uil-exit mr-2"></i>Remove from Team</a>
                                        <div class="dropdown-divider"></div>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                                class="uil uil-trash mr-2"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body pt-2 pb-3">
                            <a href="task-list.html" class="btn btn-primary btn-sm mt-2 float-right">
                                View All
                            </a>
                            <h5 class="mb-4 header-title">Tasks</h5>
                            <div class="slimscroll" style="max-height: 390px;">
                                <div class="row">
                                    <div class="col">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="task1">
                                            <label class="custom-control-label" for="task1">
                                                Draft the new contract document for
                                                sales team
                                            </label>
                                            <p class="font-size-13 text-muted">Due on 24 Aug, 2019</p>
                                        </div> <!-- end checkbox -->
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="task2">
                                            <label class="custom-control-label" for="task2">
                                                iOS App home page
                                            </label>
                                            <p class="font-size-13 text-muted">Due on 23 Aug, 2019</p>
                                        </div> <!-- end checkbox -->
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="task3">
                                            <label class="custom-control-label" for="task3">
                                                Write a release note for Shreyu
                                            </label>
                                            <p class="font-size-13 text-muted">Due on 22 Aug, 2019</p>
                                        </div> <!-- end checkbox -->
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="task4">
                                            <label class="custom-control-label" for="task4">
                                                Invite Greeva to a project shreyu admin
                                            </label>
                                            <p class="font-size-13 text-muted">Due on 21 Aug, 2019</p>
                                        </div> <!-- end checkbox -->
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="task5">
                                            <label class="custom-control-label" for="task5">
                                                Enable analytics tracking for main website
                                            </label>
                                            <p class="font-size-13 text-muted">Due on 20 Aug, 2019</p>
                                        </div> <!-- end checkbox -->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="task6">
                                            <label class="custom-control-label" for="task6">
                                                Invite user to a project
                                            </label>
                                            <p class="font-size-13 text-muted">Due on 18 Aug, 2019</p>
                                        </div> <!-- end checkbox -->
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="task7">
                                            <label class="custom-control-label" for="task7">
                                                Write a release note
                                            </label>
                                            <p class="font-size-13 text-muted">Due on 14 Aug, 2019</p>
                                        </div> <!-- end checkbox -->
                                    </div>
                                </div>
                            </div>
                    
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body pt-2">
                            <div class="dropdown mt-2 float-right">
                                <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="uil uil-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                            class="uil uil-refresh mr-2"></i>Refresh</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                            class="uil uil-user-plus mr-2"></i>Add Member</a>
                                    <div class="dropdown-divider"></div>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                            class="uil uil-exit mr-2"></i>Exit</a>
                                </div>
                            </div>
                            <h5 class="mb-4 header-title">Recent Conversation</h5>
                            <div class="chat-conversation">
                                <ul class="conversation-list slimscroll" style="max-height: 328px;">
                                    <li class="clearfix">
                                        <div class="chat-avatar">
                                            <img src="assets/images/users/avatar-9.jpg" alt="Female">
                                            <i>10:00</i>
                                        </div>
                                        <div class="conversation-text">
                                            <div class="ctext-wrap">
                                                <i>Greeva</i>
                                                <p>
                                                    Hello!
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="clearfix odd">
                                        <div class="chat-avatar">
                                            <img src="assets/images/users/avatar-7.jpg" alt="Male">
                                            <i>10:01</i>
                                        </div>
                                        <div class="conversation-text">
                                            <div class="ctext-wrap">
                                                <i>Shreyu</i>
                                                <p>
                                                    Hi, How are you? What about our next meeting?
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="chat-avatar">
                                            <img src="assets/images/users/avatar-9.jpg" alt="female">
                                            <i>10:01</i>
                                        </div>
                                        <div class="conversation-text">
                                            <div class="ctext-wrap">
                                                <i>Greeva</i>
                                                <p>
                                                    Yeah everything is fine
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="clearfix odd">
                                        <div class="chat-avatar">
                                            <img src="assets/images/users/avatar-7.jpg" alt="male">
                                            <i>10:02</i>
                                        </div>
                                        <div class="conversation-text">
                                            <div class="ctext-wrap">
                                                <i>Shreyu</i>
                                                <p>
                                                    Awesome! let me know if we can talk in 20 min
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <form class="needs-validation" novalidate name="chat-form" id="chat-form">
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control chat-input"
                                                placeholder="Enter your text" required>
                                            <div class="invalid-feedback">
                                                Please enter your messsage
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit"
                                                class="btn btn-danger chat-send btn-block waves-effect waves-light">Send</button>
                                        </div>
                                    </div>
                                </form>

                            </div> <!-- end .chat-conversation-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
    </div> <!-- content -->
</x-layout>