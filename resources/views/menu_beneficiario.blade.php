<x-layout>
    <div class="content">
        <div class="container-fluid">
            <div class="row page-title align-items-center">
                <div class="col-sm-4 col-xl-6">
                    <h4 class="mb-1 mt-0">Beneficiario</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body row">
                            <i data-feather="plus-circle" class="icon-dual-success"></i>
                            <a href="{{url('/beneficiario/cadastro')}}" class="col-xl-10">Cadastrar Beneficiario</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body row">
                            <i data-feather="list" class="icon-dual-primary"></i>
                            <a href="{{url('/beneficiario/lista')}}" class="col-xl-10">Listar Beneficiarios</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>