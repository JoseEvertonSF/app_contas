<x-layout>
    <div class="container-fluid">
        <div class="row page-title align-items-center">
            <div class="col-sm-2">
                <h4 class="mb-1 mt-0">Listagem de tipos de despesas</h4>
            </div>
            <a href="{{url('/despesas')}}">
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
                                    <th>Nomenclatura</th>
                                    <th>Data Criação</th>
                                    <th>Data Atualização</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tipoDespesas as $despesas)
                                    <tr>
                                        <td>{{$despesas->id}}</td>
                                        <td>{{$despesas->nomenclatura}}</td>
                                        <td>{{date('d/m/Y H:i:s', strtotime($despesas->created_at))}}</td>
                                        <td>{{date('d/m/Y H:i:s', strtotime($despesas->updated_at))}}</td>
                                        <td>
                                            <form method="POST" action="{{url('/beneficiario/deletar')}}">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$despesas->id}}">
                                                <button type="submit" class="btn btn-soft-danger">Excluir</button>
                                            </form>
                                        </td>
                                        <td>
                                            <button data-toggle="modal" data-target="#modalEdicao{{$despesas->id}}" class="btn btn-soft-primary">Editar</button>
                                            <!-- sample modal content -->
                                            <div id="modalEdicao{{$despesas->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Editar tipo de despesa</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST" action="{{url('/beneficiario/edit')}}">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{$despesas->id}}">
                                                                <div class="form-group">
                                                                    <label class="text-muted font-size-15 font-weight-bold">Nomenclatura</label>
                                                                    <input type="text" class="form-control" name="cgc" required id="cgc" value="{{$despesas->nomenclatura}}">
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