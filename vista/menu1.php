<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <link rel="stylesheet" href="<?= FOLDER_RESOURCES ?>css/bootstrap.css"/>
        <script type="text/javascript" src="<?= FOLDER_RESOURCES ?>js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="<?= FOLDER_RESOURCES ?>js/bootstrap.min.js"></script>
        <style>
            #contenedor{
                border: 5px solid royalblue; 
                border-radius: 20px;
                padding: 20px;
                margin: 15px 15px;
            }
            #titulo{
                border-bottom: 5px solid #ccc;
                min-height: 50px;
                padding-left: 1450px;
            }
            #menu{

            }
            #menu a{
                display: block;
                margin-top: 3px;
            }
            #contenido{
                min-height: 300px;
                border-left: 5px solid #c4e3f3;
                padding: 10px;
            }
            #pie{
                min-height: 50px;
                border-top: 5px solid #ce8483;

            }
            #nombre{

            }

            #imagen{
                height: 90%;
                width: 90%; 
                border-radius: 5em;

            }





        </style>
    </head>
    <body>

        <h1>Plan a</h1>
        <div id="contenedor">
            <div id="titulo" class="row">

            </div>

            <div id="centro" class="row">
                <div id="menu" class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="<?= ACTIVITY_INDEX_TABLE['url'] ?>">Gestionar Actividad</a>
                    <a href="<?= GRADE_INDEX['url'] ?>" id="">Agregar Curso</a>
                    <a href="<?= SUBJECT_INDEX['url'] ?>">Agregar Asignatura</a>
                    <a href="<?= INDEX_DOCENTE_GUARADAR['url']?>">Registrar Docente</a>
                    <a href="<?= USER_STUDENT_INDEX['url'] ?>">Registrar Estudiante</a>
                    <a href="<?= ACTIVITY_CONSULTA_ESTUDENT_PROFESOR['url'] ?>">Consultar Estudiante</a>
                    <a href="<?= ACTIVITY_CONSULTA_PROFESOR['url'] ?>">Consultar Instructores</a>
                    <a href="">Inasistencia</a>
                </div>

                <div id="contenido" class="col-xs-12 col-sm-6 col-md-8 col-lg-9">

                </div>
            </div> 
            <div id="pie" class="row">

            </div>
        </div>
        <script type="text/javascript">
            $('div#menu a').on('click', eventoClick);
            function cargarVista(url) {
                $.get(url, procesarRespuesta);
            }
            function procesarRespuesta(html) {
                $('#contenido').empty().append(html);
            }
            function eventoClick(e) {
                detener(e);
                var vinculo = $(this);
                var url = vinculo.attr('href');
                cargarVista(url);
            }
            function detener(e) {
                if (e.preventDefault) {
                    e.preventDefault();
                }
                if (e.stopPropagation) {
                    e.stopPropagation();
                }
                if (e.returnValue) {
                    e.returnValue = false;
                }
            }
        </script>
    </body>
</html>
