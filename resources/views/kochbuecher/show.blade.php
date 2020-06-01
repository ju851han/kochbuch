@extends('layouts.app')

@section('content')
    <h2>Kochbuch: {{ $k->kName }}</h2>
    <p>erstellt am: {{$k->erstelltam}}; zuletzt aktualisert am: {{$k->aktualisiertam}}</p>
    <h3>Inhaltsverzeichnis</h3>
   {{--TODO--}}
   {{-- <table>
      <tr>
         foreach row
          <td> {{$id}}</td>
          <td>{{$rname}}</td>
          id++
          endforeach
      </tr>

    </table>--}}
@endsection