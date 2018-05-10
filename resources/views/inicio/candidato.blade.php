@extends('layouts.app') @section('content')
<div class="row">
    <div class="col-lg-8 mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos nisi aliquid inventore obcaecati, impedit quas,
        minima magni fuga facere aperiam natus doloremque eaque cupiditate consectetur nobis officiis et corrupti amet tenetur.
        Id necessitatibus voluptas facere beatae, ut iusto earum velit quisquam nihil! Praesentium pariatur architecto maiores
        facere vel, fuga dolorem reiciendis consequatur, inventore atque non, fugiat optio sequi sit similique sapiente quam
        unde illum nobis repudiandae incidunt iste quidem tempora voluptatem? Maiores dolorum laborum enim iure dolor necessitatibus,
        deserunt repellat velit similique, eveniet adipisci quod eum sint aperiam qui ad harum perspiciatis, nihil veniam
        exercitationem. Pariatur culpa distinctio atque inventore in sapiente provident, iusto debitis laborum libero odit
        perspiciatis eum nobis nihil at officia voluptate accusamus. Eos fugiat reprehenderit quis debitis libero excepturi
        voluptates fugit blanditiis perspiciatis voluptas impedit explicabo, harum obcaecati exercitationem quasi quos! Reprehenderit
        tempora quaerat odio rerum, et, neque, fuga illo minus ad ipsam ex magnam officia?</div>
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
        <button  class="btn btn-primary btn-block" onclick="CalcularIMC()">Enviar</button>
    </div>
</div>
@endsection