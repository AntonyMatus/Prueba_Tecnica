@extends('adminlte::page')
@section('content_header')
    <h1>Agregar Poliza</h1>
@endsection
@section('content')
    <div class="container">
        <div class="col-lg-10 mx-auto mt-2">
            <div class="card py-3 m-b-30">
                <div class="card-body">
                    <form action="{{ route('policy.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    @include('admin.policy.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/select2-bootstrap4.css')}}">
<link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
@endsection

@section('js')
<script src=" {{asset('js/select2.full.min.js')}} "></script>
<script>
    $(function () {
        $('.select2').select2();
    })
</script>
@endsection
