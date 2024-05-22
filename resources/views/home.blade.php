@extends('layout.main')

@section('content')

<div class="container">
    <h1 class="text-center m-4 ">I VIAGGI DISPONIBILI</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">AGENZIA</th>
        <th scope="col">STAZIONE DI PARTENZA</th>
        <th scope="col">STAZIONE DI RITORNO</th>
        <th scope="col">ORARIO DI PARTENZA</th>
        <th scope="col">ORARIO DI ARRIVO</th>
        <th scope="col">DURATA</th>
        <th scope="col">CODICE TRENO</th>
        <th scope="col">NUMERO CARROZZA</th>
        <th scope="col">IN ORARIO</th>
        <th scope="col">CANCELLATO</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train )


        <tr>
            <th >{{$train->agency}}</th>
            <th >{{$train->departure_station}}</th>
            <th >{{$train->arrival_station}}</th>
            <th >{{$train->nationality}}</th>
            <th >{{$train->departure_time}}</th>
            <th >{{$train->arrival_time}}</th>
            <th >{{$train->duration}}</th>
            <th >{{$train->train_code}}</th>
            <th >{{$train->carriage_number}}</th>
            <th >{{$train->in_time}}</th>
            <th >{{$train->cancelled}}</th>
        </tr>
        @endforeach


        </tbody>
  </table>

  <div class="row justify-content-center">
    <div class="col-md-6">
        <!-- Aggiungi i link per navigare tra le pagine con la paginazione di Bootstrap -->
        {{ $trains->links('pagination::bootstrap-5') }}
    </div>
</div>

</div>

@endsection
