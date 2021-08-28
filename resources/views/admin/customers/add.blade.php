@extends('adminlte::page')

@section('content_header')
    <h1>Agregar Cliente</h1>
@stop
@section('content')
    <div class="container">
        <div class="col-lg-10 mx-auto mt-2">
            <div class="card py-3 m-b-30">
                <div class="card-body">
                    <form action="{{ route('customers.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    @include('admin.customers.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')

</style>
@endsection

@section('js')

    <script>
             $(document).ready(function() {

        $('.selectpicker').selectpicker();

});
    </script>
@endsection
