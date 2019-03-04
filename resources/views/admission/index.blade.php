@extends('layouts.app')

@section('content')
@if (!empty($message))
        <div class="container">
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        </div>
@endif

<div class="section1">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Sei ad un passo dalla tua nuova professione</h1>
        <p>Per assicurare la buona riuscita del corso, ogni candidato deve sostenere un breve percorso di selezione. Le due caratteristiche fondamentali per essere un perfetto studente Boolean sono la capacità di ragionamento critico e la motivazione</p>
      </div>
    </div>
  </div>
</div>
<div class="section2">
   <div class="container">
       <h2>Richiedi informazioni</h2>
       <form action="{{ route('admission.save')}}" method="post">
           @csrf
           @method('POST')
           <div>
               <label for="name">Nome</label>
               <input type="text" name="name" placeholder="Inserisci il tuo nome">
           </div>
           <div>
               <label for="email">Email</label>
               <input type="text" name="email" placeholder="Inserisci la tua mail">
           </div>
           <div>
               <label for="message">Messaggio</label>
               <textarea name="message" placeholder="Inserisci il messaggio"></textarea>
           </div>
           <div>
               <input type="submit" value="Invia messaggio">
           </div>
       </form>
   </div>
 </div>
@endsection
