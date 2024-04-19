<x-layout>
    <div class="content">
        <div class="container-fluid">
            <div class="row page-title align-items-center">
                <div class="col-sm-4 col-xl-6">
                    <h4 class="mb-1 mt-0">Tipos de despesas</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-4">Cadastrar tipos de despesas</h4>
                            <form method="POST" action="{{url('/despesas/tipo/cadastro/insert')}}">
                                @csrf
                                <div class="form-group">
                                    <label class="text-muted font-size-15 font-weight-bold">Nomenclatura</label>
                                    <input type="text" class="form-control" name="nomenclatura" required id="nomenclatura" placeholder="Lazer, Educação, Saúde...">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-success col-md-12" type="submit" class="form-control" value="Registrar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>