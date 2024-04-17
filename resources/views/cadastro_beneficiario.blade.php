<x-layout :scripts='$scripts'>
    <div class="content">
        <div class="container-fluid">
            <div class="row page-title align-items-center">
                <div class="col-sm-4 col-xl-6">
                    <h4 class="mb-1 mt-0">Beneficiário</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-4">Cadastrar Beneficiário</h4>
                            <form method="POST" action="{{url('/beneficiario/cadastro/create')}}">
                                @csrf
                                <div class="form-group">
                                    <label class="text-muted font-size-15 font-weight-bold">Tipo de Beneficiário</label>
                                    <select name="tipo_pessoa" class="form-control" id="tipo_pessoa" required>
                                        <option selected disabled value></option>
                                        <option value="PF">PF</option>
                                        <option value="PJ">PJ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="text-muted font-size-15 font-weight-bold">CPF/CNPJ</label>
                                    <input type="text" class="form-control" name="cgc" required id="cgc">
                                </div>
                                <div class="form-group">
                                    <label class="text-muted font-size-15 font-weight-bold">Nome</label>
                                    <input type="text" class="form-control" name="nome" required id="nome">
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