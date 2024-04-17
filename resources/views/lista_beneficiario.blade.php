<x-layout>
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
                                        <td>
                                            <form method="POST" action="{{url('/beneficiario/deletar')}}">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$beneficiario->id}}">
                                                <button type="submit" class="btn btn-soft-danger">Excluir</button>
                                            </form>
                                        </td>
                                        <td>
                                            <button class="btn btn-soft-primary">Editar</button>
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