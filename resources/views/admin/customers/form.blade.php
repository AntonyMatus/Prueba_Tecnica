
<div class="tab-content" id="myTabContent1">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

        <div class="row g-3" style="padding-bottom: 1rem;">
            <div class="form-group col-md-6" style="display: none">
                <label for="inputEmail6">Num Agente</label>
                <input type="text" value="{{$id}}" class="form-control"
                id="inputEmail6" name="users_id" required="required">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail6">Nombre Completo</label>
                <input type="text" value="{{$data->name}}" class="form-control"
                id="inputEmail6" name="name" required="required">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail6">Telefono</label>
                <input type="text" value="{{$data->phone}}" class="form-control"
                id="inputEmail6" name="phone" required="required">
            </div>
        </div>

        <div class="row g-3" style="padding-bottom: 1rem;">
            <div class="form-group col-md-6">
                <label for="inputEmail6">Email</label>
                <input type="email" value="{{$data->email}}" class="form-control"
                id="inputEmail6" name="email" required="required">

            </div>


        </div>
    </div>
</div>
<button type="submit" class="btn btn-success btn-cta">Save changes</button>

    <a class="btn btn-primary" href="{{ route('customers.index') }}"> Regresar</a>
