@extends('adminlte::page')
@section('css')
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.css"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.css"></script>


@stop
@section('content_header')
    <h1>Lista de Polizas</h1>
@stop

@section('content')
<br>
<div class="row">
    <div class="col-md-12" style="text-align: right;"><a href="{{ route('policy.create')}}" class="btn m-b-15 ml-2 mr-2 btn-rounded btn-warning">Agregar poliza</a>&nbsp;&nbsp;&nbsp;</div>

</div>
<br>
<div class="card">
    <div class="card-body">
        <table id="polizas" class="table table-striped table-bordered" style="width: 100%">
            <thead>
                <tr>
                    <td width="5%">Num. Póliza</td>
                    <td width="20%">Nombre Cliente</td>
                    <td width="13%">Aseguradora</td>
                    <td width="13%">Tipo de Póliza</td>
                    <td width="10%">Precio</td>
                    <td width="15%">Status</td>
                    <td >Options</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($policys as $policy)
                <tr>
                    <td> {{$policy->num_poliza}} </td>
                    <td> {{$policy->customers->name}} </td>
                    <td> {{$policy->aseguradora}} </td>
                    <td>
                        @if ($policy->tipo_poliza == 0)
                        <small class="badge badge-info"> GASTOS MEDICOS</small>
                        @elseif ($policy->tipo_poliza == 1)
                        <small class="badge badge-success"> AUTOS</small>
                        @elseif ($policy->tipo_poliza == 2)
                        <small class="badge badge-danger"> SEGURO DE VIDA</small>
                        @endif
                    </td>
                    <td> ${{$policy->precio}} </td>
                    <td>
                        @if ($policy->status == 0)
                        <small class="badge badge-success"> VIGENTE</small>
                        @else
                        <small class="badge badge-danger"> VENCIDA</small>
                        @endif
                    </td>
                    <td style="display: flex"> <a href="{{ route('policy.edit',$policy->id)}}" class="btn btn-primary">Editar</a> &nbsp;&nbsp;&nbsp;&nbsp;
                        <form action="{{ route('policy.delete',$policy->id)}}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-cta">Eliminar</button>
                        </form></td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('js')
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}

<script>
    $(document).ready(function() {
			$('#polizas').DataTable();
		  } );

</script>
@endsection
