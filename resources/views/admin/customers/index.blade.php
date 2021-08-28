@extends('adminlte::page')

@section('css')
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.css"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.css"></script>
@stop
@section('content_header')
    <h1>Lista de Clientes</h1>
@stop
@section('content')
    <br>
    <div class="row">
        <div class="col-md-12" style="text-align: right;"><a href="{{ route('customers.create')}}" class="btn m-b-15 ml-2 mr-2 btn-rounded btn-warning">Agregar cliente</a>&nbsp;&nbsp;&nbsp;</div>

    </div>
        <br>
    <div class="card">
        <div class="card-body">
            <table id="clientes" class="table table-striped table-bordered" style="width: 100%">
                <thead>
                    <tr>
                        <td width="25%">Nombre Completo</td>
                        <td width="20%">Telefono</td>
                        <td width="25%">Email</td>
                        <td>Options</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $client)
                        <tr>
                            <td> {{ $client->name }} </td>
                            <td> {{ $client->phone }} </td>
                            <td> {{ $client->email }} </td>
                            <td style="display: flex"><a href="{{ route('customers.edit',$client->id)}}" class="btn btn-primary">Editar</a> &nbsp;&nbsp;&nbsp;&nbsp;
                            <form action="{{ route('customers.delete',$client->id)}}" method="get">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-cta">Eliminar</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('js')
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
			$('#clientes').DataTable();
		  } );
</script>
@endsection
