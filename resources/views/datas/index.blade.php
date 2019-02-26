@extends('layouts.default')
@section('content')

{{ $datas->links() }}

<table>
      @foreach ($datas as $data)
        <tr><td>{{ $data->id }}. <a href="{{ url($data->url) }}">{{ $data->music_nm }}</td><th>{{ $data->artist_nm }}</th></tr>
      @endforeach
</table>

@endsection