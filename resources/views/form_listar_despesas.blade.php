<x-layout>
    <div class="content">
        <div class="container-fluid">
            <div class="row page-title align-items-center">
                <div class="col-sm-2">
                    <h4 class="mb-1 mt-0">Listagem de depesas</h4>
                </div>
                <a href="{{url('/despesas')}}">
                    <button class="btn btn-primary">Voltar</button>
                </a>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-4">Listagem de despesas</h4>
                            <form method="GET" action="{{url('/despesa/lista')}}">
                                <div class="form-group">
                                    <label class="text-muted font-size-15 font-weight-bold">Vencimento Inicial</label>
                                    <input type="date" class="form-control" name="vencimento_inicial" required id="vencimento_inicial">
                                </div>
                                <div class="form-group">
                                    <label class="text-muted font-size-15 font-weight-bold">Vencimento Final</label>
                                    <input type="date" class="form-control" name="vencimento_final" required id="vencimento_final">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-success col-md-12" type="submit" class="form-control" value="Pesquisar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>