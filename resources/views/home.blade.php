@extends('adminlte::page')

@section('title', 'Admin - Carte de clientes.')

@section('css')
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

@stop

@section('content')
<br>

<div class="row">
    <div class="col-lg-4 col-6">
        <div class="small-box bg-info" style="text-align: center">
            <div class="inner">
                <h2>Clientes</h2>
                <h3>{{ $overview['customers'] }}</h3>
            </div>

        </div>
    </div>
    <div class="col-lg-4 col-6">
        <div class="small-box bg-primary" style="text-align: center">
            <div class="inner">
                <h2>Polizas</h2>
                <h3>50</h3>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-6">
        <div class="small-box bg-success" style="text-align: center">
            <div class="inner">
                <h2>Asegurados</h2>
                <h3> {{$overview['insured']}} </h3>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

<script>
        $(document).ready(function() {
			$('#clientes').DataTable();
		  } );




</script>
@endsection
