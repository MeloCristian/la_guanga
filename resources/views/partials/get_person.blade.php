<div class="card mx-auto" style="width: 40rem">
    <form action="{{ url('persona/') }}" method="GET" id="form_consult">
        {{ csrf_field() }}
        {{ method_field('GET') }}
        <div class="card-header">
            <h5 class="card-title text-uppercase text-center">Buscar cliente</h5>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Para generar su factura debe completar el siguiente formulario, ingrese su numero de cedula para
                continuar.
            </div>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="director" class="form-label">Cedula</label>
                <input type="number" class="form-control" id="dni" name="dni">
            </div>

        </div>
        <div class="card-footer bg-dark text-center">
            <button type="submit" class="btn btn-outline-success" id="btn_consulta">Buscar</button>
        </div>
    </form>
</div>
