<x-layout :scripts="$scripts">
    <div class="content">
        <div class="container-fluid">
            <div class="row page-title align-items-center">
                <div class="col-sm-4 col-xl-6">
                    <h4 class="mb-1 mt-0">Despesas</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-4">Cadastrar despesa</h4>
                            <form method="POST" action="{{url('/despesa/cadastro/insert')}}">
                                @csrf
                                <div class="form-group">
                                    <label class="text-muted font-size-15 font-weight-bold">Tipo de despesa</label>
                                    <select name="tipo_despesa" class="form-control" id="tipo_despesa" required>
                                        <option selected disabled value>Selecione o tipo de despesa</option>
                                        @foreach($tipoDespesas as $tipo)
                                            <option value="{{$tipo->id}}">{{$tipo->nomenclatura}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="text-muted font-size-15 font-weight-bold">Beneficiário</label>
                                    <select name="beneficiario" class="form-control" id="beneficiario" required>
                                        <option selected disabled value>Selecione o beneficiário</option>
                                        @foreach($beneficiarios as $beneficiario)
                                            <option value="{{$beneficiario->id}}">{{$beneficiario->codigo.' - '.$beneficiario->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="text-muted font-size-15">Emissão</label>
                                    <input type="date" class="form-control" name="emissao" required id="emissao">
                                </div>
                                <div class="form-group">
                                    <label class="text-muted font-size-15">Vencimento</label>
                                    <input type="date" class="form-control" name="vencimento" required id="vencimento">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="text-muted font-size-15 font-weight-bold col-md-2">Valor</label>
                                        <div class="custom-control custom-radio col-md-2">
                                            <input type="radio" class="custom-control-input" name="tipo_valor" value="total" checked required>
                                            <label class="custom-control-label text-muted font-size-15" for="valor_total">Total</label>
                                        </div>
                                        <div class="custom-control custom-radio col-md-2">
                                            <input type="radio" class="custom-control-input" name="tipo_valor" value="parcela" required>
                                            <label class="custom-control-label text-muted font-size-15" for="valor_parcela">Parcela</label>
                                        </div>
                                    </div>

                                    <input type="text" class="form-control" name="valor" required id="valor">
                                </div>
                                <div class="form-group">
                                    <label class="text-muted font-size-15 font-weight-bold">Quantidade de parcelas</label>
                                    <select name="qtde_parcela" class="form-control" id="qtde_parcela" required>
                                        <option selected disabled value></option>
                                        @for($parcela = 1; $parcela <= 12 ; $parcela++)
                                            <option value="{{$parcela}}">{{$parcela}}</option>
                                        @endfor
                                    </select>
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