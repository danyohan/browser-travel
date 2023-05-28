@section('content')
  <table class="table table-striped mt-4">
      <thead>
      <tr>
          <th scope="col">Humedad</th>
          <th scope="col">Ciudad</th>
      </tr>
      </thead>
      <tbody>
      @foreach($history as $row)
          <tr>
              <td>{{$row->humidity}}</td>
              <td>{{$row->city}}</td>
          </tr>
      @endforeach
      </tbody>
  </table>
  <div class="card.footer">
    {!! $history->links() !!}
  </div>
@stop