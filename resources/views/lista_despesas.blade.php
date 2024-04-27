<x-layout :scripts="$scripts">
    <div class="container-fluid">
        <div class="row page-title align-items-center">
            <div class="col-sm-2">
                <h4 class="mb-1 mt-0">Listagem de depesas</h4>
            </div>
            <a href="{{url('/despesa/lista/form')}}">
                <button class="btn btn-primary">Voltar</button>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-border">
                            <thead>
                                <tr class="table-active">
                                    <th>Beneficiario</th>
                                    <th>Valor</th>
                                    <th>Parcela</th>
                                    <th>Tipo de despesa</th>
                                    <th>Emissão</th>
                                    <th>Vencimento</th>
                                    <th>Ultima atualização</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total = 0;
                                @endphp
                                @foreach($despesas as $despesa)
                                    @php
                                        $total += $despesa->valor;
                                    @endphp
                                    <tr>
                                        <td>{{$despesa->codigo." - ".$despesa->nome}}</td>
                                        <td>{{number_format($despesa->valor, 2, ',', '.')}}</td>
                                        <td>{{$despesa->parcela}}</td>
                                        <td>{{$despesa->nomenclatura}}</td>
                                        <td>{{date('d/m/Y', strtotime($despesa->emissao))}}</td>
                                        <td>{{date('d/m/Y', strtotime($despesa->vencimento))}}</td>
                                        <td>{{date('d/m/Y H:i:s', strtotime($despesa->updated_at))}}</td>
                                        <td>
                                            <form method="POST" action="{{url('/despesa/lista/delete')}}">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$despesa->id}}">
                                                <input type="hidden" name="vencimento_inicial" value="{{$vencimento_inicial}}">
                                                <input type="hidden" name="vencimento_final" value="{{$vencimento_final}}">
                                                <button type="submit" onclick="" class="btn btn-danger">Excluir</button>
                                            </form>
                                        </td>
                                        <td>
                                            <button data-toggle="modal" data-target="#modalEdicao{{$despesa->id}}" class="btn btn-soft-primary">Editar</button>
                                            <div id="modalEdicao{{$despesa->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Editar despesa</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST" action="{{url('/despesa/lista/editar')}}">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{$despesa->id}}">
                                                                <input type="hidden" name="vencimento_inicial" value="{{$vencimento_inicial}}">
                                                                <input type="hidden" name="vencimento_final" value="{{$vencimento_final}}">
                                                                <div class="form-group">
                                                                    <label class="text-muted font-size-15 font-weight-bold">Tipo de despesa</label>
                                                                    <select name="tipo_despesa" class="form-control" id="tipo_despesa" required>
                                                                        <option selected value="{{$despesa->tipo_despesa}}">{{$despesa->nomenclatura}}</option>
                                                                        @foreach($tipoDespesas as $tipo)
                                                                            @if($tipo->nomenclatura != $despesa->nomenclatura )
                                                                                <option value="{{$tipo->id}}">{{$tipo->nomenclatura}}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="text-muted font-size-15 font-weight-bold">Beneficiário</label>
                                                                    <select name="beneficiario" class="form-control" id="beneficiario" required>
                                                                        <option selected value="{{$despesa->beneficiario}}">{{$despesa->nome}}</option>
                                                                        @foreach($beneficiarios as $beneficiario)
                                                                            @if($beneficiario->nome != $despesa->nome)
                                                                                <option value="{{$beneficiario->id}}">{{$beneficiario->codigo.' - '.$beneficiario->nome}}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="text-muted font-size-15">Emissão</label>
                                                                    <input type="date" class="form-control" name="emissao" required id="emissao" value="{{$despesa->emissao}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="text-muted font-size-15">Vencimento</label>
                                                                    <input type="date" class="form-control" name="vencimento" required id="vencimento" value="{{$despesa->vencimento}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="text-muted font-size-15 font-weight-bold col-md-2">Valor</label>
                                                                    <input type="text" class="form-control valor" name="valor" id="valor" required value="{{number_format($despesa->valor, 2, ',', '.')}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input class="btn btn-success col-md-12" type="submit" class="form-control" value="Registrar">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="table-active">
                                    <th colspan="1"></th>
                                    <th>{{number_format($total, 2, ',', '.')}}</th>
                                    <th colspan="7"></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>