<form action="{{url('/programa')}}" method="post" enctype="multipart/form-data" >
    @csrf
    <label for="tipo_prog">Tipo programa</label>
    <input type="text" name="tipo_prog" id="tipo_prog">
    <br>

    <label for="cod_prog">Codigo prrgrama</label>
    <input type="text" name="cod_prog" id="cod_prog">
    <br>

    <label for="num_sesiones">Numero de sesiones</label>
    <input type="text" name="num_sesiones" id="num_sesiones">
    <br>

    <label for="costo_mensual">Costo mensual</label>
    <input type="text" name="costo_mensual">
    <br>

    <label for="id_formato">Id formato</label>
    <input type="text" name="id_formato" id="id_formato">
    <br>
    

    <input type="submit" name="">


</form>