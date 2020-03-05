@extends('layouts.principal')

@section('contenido')

    <article class="cajaa">
      <text align= "center"><h1>Preguntas Frecuentes</h1>
</article>
<article class="cajab">



    <span><h3>¿En que puedo ayudarte?</h3></span>
    <h5>Preguntas sobre envios</h5>
    <text align= "left"><ul type="circle">
<ul>
      <li>¿Cuanto cuesta el envio?</li>
      <p>El vendedor acordara el costo del envio.</p>
      <p></p>
      <li>¿Cuánto tarda el envío?</li>
      <p>Obligatoriamente de 3 a 5 dias despues de hacer el pedido y confirmar la compra.</p>
      <p></p>
      <li>¿Cómo puedo consultar el estado de mi pedido?</li>
      <p>Mediante un codigo de segurida para un seguimiento personal.</p>
      <p></p>
      <li>¿Se hacen envíos a Gran Bs.As, CABA?</li>
      <p>Si. Consultar antes con el vendedor.</p>
      <p></p>
</ul>
    <spam><h5>Preguntas sobre insidencias</h5></span>
    <text align= "left"><ul type="circle">
<ul>
    <li>¿Tienen una atención al cliente?</li>
    <p>Llama al 11-34453276</p>
    <li>¿Se permiten devoluciones?</li>
    <p>Si el producto no es consumido y aun se conserva de forma intacta si,tiene devolucion.</p>
    <p> </p>
    <li>¿Cómo puedo contactar con el vendedor?</li>
    <p>Por medio privado.</p>
</ul>
</article>
<div class= "cajac">

    <a href="{{route('index')}}">Volver Al inicio</a>
    <footer>


      <span>Copyright (c) 2019 Copyright Holder All Rights Reserved.</span>


    </footer>
</div>

@endsection
