@extends('base-template')
@section('content')
  <table class="table table-striped mt-4">
      <thead>
      <tr>
          <th scope="col">Humedad</th>
          <th scope="col">Ciudad</th>
          <th scope="col">Fecha</th>
      </tr>
      </thead>
      <tbody>
      @foreach($history as $row)
          <tr>
              <td>{{$row->humidity}}</td>
              <td>{{$row->city}}</td>
              <td>{{$row->created_at}}</td>
          </tr>
      @endforeach
      </tbody>
  </table>
  <div class="d-flex justify-content-end">
    {!! $history->links() !!}
  </div>
  
@endsection