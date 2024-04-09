<x-layout>
    <div class="container-fluid">
        <div class="row page-title align-items-center">
            <div class="col-sm-4 col-xl-6">
                <h4 class="mb-1 mt-0">Simulações</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-border">
                            <thead>
                                <tr class="table-active">
                                    <th>Valor</th>
                                    <th>Data Lançamento</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($simulacoes as $simulacao)
                                    <tr>
                                        <td>{{number_format($simulacao->valor, 2, ',', '.')}}</td>
                                        <td>{{date('d/m/Y H:i:s', strtotime($simulacao->created_at))}}</td>
                                        <td>
                                            <form method="POST" action="{{url('/simulacao/deletar')}}">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$simulacao->id}}">
                                                <button type="submit" class="btn btn-danger">Excluir</button>
                                            </form>
                                           
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