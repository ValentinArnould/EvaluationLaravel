@extends('layouts.page')

@section('content')
    <div class="title" style="margin:auto;padding:auto;align-items:center;
        justify-content:center;text-align:center;">
        <h1>Picatsa</h1>
        <h2>Site de photos de chat (miaou)</h2>
    </div>
    <br><br>
    <div style="display:flex;flex-wrap:wrap">    
    @if($vignettes != null & count($vignettes) > 0)
    <table>
    <tr>
    @foreach ($vignettes as $vignette)
        <td>
            @if(!empty($vignette->url))
            <img src="{{$vignette->url}}" alt="{{$vignette->legende}}" height="300" width="300">
            @else
            <img src="https://www.nato-pa.int/sites/default/files/default_images/default-image.jpg" alt="default">
            @endif
        </td>
    @endforeach
    </tr>
    </table>
    @endif
    </div>

@endsection