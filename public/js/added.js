function CalcularIMC(){
    $peso = document.getElementById("masa").value;
    $estatura =  document.getElementById("estatura").value;

    if ($peso == "" || $estatura == "")
    {
        alert('Inserte la masa y estatura');
        return;
    }

    $estaturaCuadrada = ($estatura / 100) * ($estatura / 100);
    $imc = $peso / $estaturaCuadrada;
    document.getElementById("imc").value = $imc;
}