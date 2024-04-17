<x-layout :scripts="$scripts">
    <div class="container-fluid">
        <div class="row page-title align-items-center">
            <div class="col-sm-2">
                <h4 class="mb-1 mt-0">Listagem de Beneficiários</h4>
            </div>
            <a href="{{url('/beneficiario')}}">
                <button class="btn btn-primary">Voltar</button>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-border">
                            <thead>
                                <tr class="table-active">
                                    <th>Código</th>
                                    <th>CGC</th>
                                    <th>Nome</th>
                                    <th>Tipo de pessoa</th>
                                    <th>Data Criação</th>
                                    <th>Data Atualização</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($beneficiarios as $beneficiario)
                                    <tr>
                                        <td>{{$beneficiario->codigo}}</td>
                                        <td>{{$beneficiario->cgc}}</td>
                                        <td>{{$beneficiario->nome}}</td>
                                        <td>{{$beneficiario->tipo}}</td>
                                        <td>{{date('d/m/Y H:s:i', strtotime($beneficiario->created_at))}}</td>
                                        <td>{{date('d/m/Y H:s:i', strtotime($beneficiario->updated_at))}}</td>
                                        <td>
                                            <form method="POST" action="{{url('/beneficiario/deletar')}}">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$beneficiario->id}}">
                                                <button type="submit" class="btn btn-soft-danger">Excluir</button>
                                            </form>
                                        </td>
                                        <td>
                                            <button data-toggle="modal" data-target="#modalEdicao{{$beneficiario->id}}" class="btn btn-soft-primary">Editar</button>
                                            <!-- sample modal content -->
                                            <div id="modalEdicao{{$beneficiario->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Editar Beneficiario</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST" action="{{url('/beneficiario/edit')}}">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{$beneficiario->id}}">
                                                                <div class="form-group">
                                                                    <label class="text-muted font-size-15 font-weight-bold">Tipo de Beneficiário</label>
                                                                    <select name="tipo_pessoa" class="form-control" id="tipo_pessoa" required>
                                                                        @if($beneficiario->tipo == 'PF')
                                                                            <option value="PF">PF</option>
                                                                            <option value="PJ">PJ</option>
                                                                        @else
                                                                            <option value="PJ">PJ</option>
                                                                            <option value="PF">PF</option>
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="text-muted font-size-15 font-weight-bold">CPF/CNPJ</label>
                                                                    <input type="text" class="form-control" name="cgc" required id="cgc" value="{{$beneficiario->cgc}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="text-muted font-size-15 font-weight-bold">Nome</label>
                                                                    <input type="text" class="form-control" name="nome" required id="nome" value="{{$beneficiario->nome}}">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-success">Salvar</button>
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
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>