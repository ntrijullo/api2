
@extends('layout')
@section('title','Estudiantes')
@section('content')    
    <div class="container">
        <div class="row">
        <h1 id="titulo" >Datos de estudiantes</h1>

        </div>
        <br>
        <table id="tabla" class="table table-dark table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Rut</th>
                    <th>Edad</th>
                    <th>Carrera</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
        <script>
            $(document).ready(function(){
                $.ajax({  
                    type: "GET",  
                    url: "http://127.0.0.1:8000/api/estudiantes",    
                    dataType: "json", 
                    success: function (data) {  
                        console.log(data)
                        $.each(data.data, function(i,item){
                                var row = "<tr>"+
                                "<td>" + item.id + "</td>" + 
                                "<td>" + item.nombre + "</td>" +
                                "<td>" + item.apellido + "</td>" +
                                "<td>" + item.rut + "</td>" + 
                                "<td>" + item.edad + "</td>" +
                                "<td>" + item.carrera + "</td>" +
                                "</tr>";						 
                                $("#tabla>tbody").append(row);
                            });
                    }, //End of AJAX Success function  
                });  
            })
        </script>    
@endsection
