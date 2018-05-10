@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-4 mt-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos reiciendis molestiae voluptatem, at id enim
            consequatur minima ut deserunt iste doloremque explicabo voluptas vel amet recusandae, quod itaque inventore
            a iusto blanditiis. Sit tempora repellendus veritatis, ab fugit aut eius quaerat nulla labore harum recusandae
            perferendis, iure corrupti. Itaque, ab? Tempora distinctio dolore aperiam. Ea maxime ex ipsa, voluptas delectus
            accusamus veniam unde illum fugiat repudiandae a laborum totam exercitationem veritatis tempora quisquam modi
            incidunt vero, recusandae rerum id! Cum, quibusdam, ut itaque, aperiam debitis repellendus explicabo tempora
            accusamus saepe dicta consectetur? Culpa voluptates exercitationem ipsa ad tempora vel quisquam.
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
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control">asdasd</textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Enviar</button>
            </form>
        </div>
    </div>
@endsection @section('footer')
<div class="text-center">
    
</div>
@endsection