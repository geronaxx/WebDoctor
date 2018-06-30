@extends('layouts.app') @section('content')
<div class="row">
    <div class="col-lg-8 mt-4">
        <p>La organizaci&oacute;n mundial de la salud clasifica el sobrepeso y la obesidad en base al &iacute;ndice de masa de corporal (IMC):</p>
        
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Valor del IMC</th>
                    <th scope="col"></th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"></th>
                    <td>18 a 24.9</td>
                    <td>Se considera normal</td>
                    
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>25 a 29.9</td>
                    <td>Sobrepeso</td>
                    
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>30 a 34.9</td>
                    <td>Obseidad grado I</td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>35 a 39.9</td>
                    <td>Obseidad grado II</td>
                    
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>40 o m&aacute;s</td>
                    <td>Obseidad grado III</td>
                    
                </tr>
            </tbody>
        </table>
        <p> El IMC se calcula dividiendo el peso (en kilogramos) entre la altura al cuadrado (en metros). Por ejemplo, si yo
        peso 90 kg y mido 1.65 m:
        <div class="text-center pb-2"> 90 ÷ (1.65)2 = 90 ÷ 2.72 = 33</div>
        <p> Obtengo un IMC de 33, que corresponde a una obesidad grado I.
        
        <p> La norma oficial mexicana establece que la cirug&iacute;a bari&aacute;trica est&aacute; indicada en pacientes con
        un IMC &#8805;40 o un IMC &#8805; 35 y enfermedades asociadas a la obesidad.
        <p> Existe evidencia a nivel internacional que los pacientes con un IMC &#8805; 30 y diabetes mellitus tipo 2 pueden
        beneficiarse de la cirug&iacute;a bari&aacute;trica.
    </div>
    <div class="col-lg-4 mt-4">
        <form>
            <div class="form-group">
                <label for="masa">Masa en Kilos</label>
                <input type="text" name="masa" id="masa" class="form-control" placeholder="Masa en Kilos">
            </div>
            <div class="form-group">
                <label for="estatura">Estatura</label>
                <input type="text" name="estatura" id="estatura" class="form-control" placeholder="Estatura">
            </div>
            <div class="form-group">
                <label for="imc">IMC</label>
                <input type="text" name="imc" id="imc" class="form-control" placeholder="" disabled>
            </div>
        </form>
        <button class="btn btn-primary btn-block" onclick="CalcularIMC()">Enviar</button>
    </div>
</div>
@endsection