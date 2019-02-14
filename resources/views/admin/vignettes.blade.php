@extends('layouts.page')

@section('content')
<br>
<div style="display:flex;flex-wrap:wrap">    
    @if($vignettes != null & count($vignettes) > 0)
        <table>
            <tr>
            @foreach ($vignettes as $vignette)
                <td>
                    <img src="{{$vignette->url}}" alt="{{$vignette->legende}}">
                    <tr>
                        <td>voir</td>
                        <td>modifier</td>
                        <td> <a href="/vignettes/{{$vignette->id}}/delete">supprimer</a></td>
                    </tr>
                </td>
            @endforeach
            </tr>
        </table>
    @endif
</div>

@endsection