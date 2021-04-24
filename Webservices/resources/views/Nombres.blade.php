@extends('MasterPlantilla')

    @section('Matris')
    

        <form action="Redes2" method="get" class="container">
        
            <br><h2>Ingrese Nombres: <input type="text" id="p" name="p" placeholder="Nombre1 Nombre2" required></h2><br><br>
            <h2>Ingrese Apellidos: <input type="text" name="q" id="q" placeholder="Paterno Materno" required></h2><br><br>
            <h3>Debe incluir un espacio entre cada nombre y cada apellido<br>EJEMPLO: [Pedro Juan][Martinez Rodriguez]</h3>
            <input type="submit" value="Ingresar" class="btn btn-secondary">
        </form>


    @endsection
