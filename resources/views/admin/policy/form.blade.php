<div class="tab-content" id="myTabContent1">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

        <div class="row g-3" style="padding-bottom: 1rem;">
            <div class="form-group col-md-4" style="display: none">
                <label for="inputEmail6">Num Agente</label>
                <input type="text" value="{{$id}}" class="form-control"
                id="inputEmail6" name="users_id" required="required">
            </div>
            <div class="form-group col-md-4">
                <label for="inputEmail6">Numero de Poliza</label>
                <input placeholder="Escriba el numero de Póliza" type="text" value="{{$data->num_poliza}}" class="form-control"
                id="inputEmail6" name="num_poliza" required="required">
            </div>
            <div class="form-group col-md-4">
                <label for="inputEmail6">Fecha de Inicio</label>
                <input type="date" value="{{$data->fecha_inicio}}" class="form-control"
                id="inputEmail6" name="fecha_inicio" required="required">
            </div>
            <div class="form-group col-md-4">
                <label for="inputEmail6">Fecha de Final</label>
                <input type="date" value="{{$data->fecha_final}}" class="form-control"
                id="inputEmail6" name="fecha_final" required="required">
            </div>

        </div>

        <div class="row g-3" style="padding-bottom: 1rem;">
            <div class="form-group col-md-4">
                <label for="inputEmail6">Nombre Cliente</label>
                <select name="customers_id" id="customers_id" class="form-control">
                    <option >Selecciona el Nombre del Cliente</option>
                    @foreach ( $customers as $custom )
                    <option value=" {{ $custom->id }} " @if ($data->customers_id == $custom->id ) selected @endif> {{$custom->name}} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputEmail6">Personas Aseguradas</label>
                <select name="insureds_id[]"  class="select2" multiple="multiple" data-placeholder="Selecciona a las PErsonas aseguradas" style="width: 100%;">
                    @foreach ( DB::table('insureds')->get() as $insu )
                    <option value=" {{ $insu->name }}" @if (in_array($insu->name, $array)) selected @endif> {{$insu->name}} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputEmail6">Aseguradora</label>
                <input placeholder="Nombre de la Aseguradora" type="text" value="{{$data->aseguradora}}" class="form-control"
                id="inputEmail6" name="aseguradora" required="required">
            </div>
        </div>
        <div class="row g-3" style="padding-bottom: 1rem;">
            <div class="form-group col-md-4">
                <label>Selecciona el Tipo de Póliza</label>
                <select name="tipo_poliza" class="form-control " style="width: 100%;">
                  <option selected="selected">Selecciona el Tipo de Póliza</option>
                  <option value="0" @if ($data->tipo_poliza == 0) selected @endif>Gastos Médicos</option>
                  <option value="1" @if ($data->tipo_poliza == 1) selected @endif>Auto</option>
                  <option value="2" @if ($data->tipo_poliza == 2) selected @endif>Seguro de Vida</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputEmail6">Precio</label>
                <input placeholder="Escriba Precio" type="number" value="{{$data->precio}}" class="form-control"
                id="inputEmail6" name="precio" required="required">
            </div>
            <div class="form-group col-md-4">
                <label>Selecciona el Estado de la Póliza</label>
                <select name="status" class="form-control " style="width: 100%;">
                  <option selected="selected">Selecciona el Estado de la póliza</option>
                  <option value="0" @if ($data->status == 0) selected @endif>VIGENTE</option>
                  <option value="1" @if ($data->status == 1) selected @endif>VENCIDA</option>
                </select>
            </div>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-success btn-cta">Save changes</button>

    <a class="btn btn-primary" href="{{ route('policy.index') }}"> Regresar</a>


