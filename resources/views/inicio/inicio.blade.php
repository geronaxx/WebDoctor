@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-4 mt-4">
        <h3>&#191;Qu&eacute; es la cirug&iacute;a bari&aacute;trica&#63;</h3>
        Son los procedimientos que tienen como objetivo principal la p&eacute;rdida de peso, as&iacute; como la remisi&oacute;n de los padecimientos asociados
         a la obesidad.<br><br>
        <h3>&#191;Cu&aacute;les son los padecimientos asociados a la obesidad&#63;</h3>
        Los principales son diabetes mellitus tipo 2, hipertensi&oacute;n arterial sist&eacute;mica, dislipidemias (alteraciones en colesterol o triglic&eacute;ridos
         en sangre), apnea obstructiva del sue&#241;o, esteatosis hep&aacute;tica (enfermedad de h&iacute;gado graso), problemas de articulaciones (columna vertebral 
         y rodillas sobre todo).<br><br>
        <h3>&#191;Qu&eacute; beneficios tiene para m&iacute; la cirug&iacute;a bari&aacute;trica&#63;</h3>
        La cirug&iacute;a bari&aacute;trica es el mejor m&eacute;todo para perder peso comprobado cient&iacute;ficamente a nivel mundial. Puedes perder el 70&#37; de 
        tu exceso de peso 2 a&#241;os despu&eacute;s de la cirug&iacute;a. Existe remisi&oacute;n de diabetes mellitus en 75&#37; de los casos, de la hipertensi&oacute;n 
        arterial en un 66&#37; y mejor&iacute;a de los s&iacute;ntomas de apnea del sueño en 75&#37;.

        </div>
        <div class="col-lg-8 mt-4">
            <form action="/mail/send" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Inserte su correo electronico">
                </div>
                <div class="form-group">
                    <label for="message">Mensaje</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Enviar</button>
            </form>
        </div>
    </div>
@endsection @section('footer')
<div class="text-center">
    
</div>
@endsection