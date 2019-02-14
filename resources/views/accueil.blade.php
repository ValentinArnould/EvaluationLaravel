@extends('layouts.page')

@section('content')
    <div class="title">
        <h1>Picatsa</h1>
        <h2>Site de photos de chat (miaou)</h2>
    </div>
    <br>
    <div style="display:flex;flex-wrap:wrap">    
    @if($vignettes != null & count($vignettes) > 0)
    <table>
    <tr>
    @foreach ($vignettes as $vignette)
        <td>
            <img src="https://www.nato-pa.int/sites/default/files/default_images/default-image.jpg" alt="default">
        </td>
    @endforeach
    </tr>
    </table>
    @endif
    </div>

@endsection