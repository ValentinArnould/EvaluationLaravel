@extends('layouts.page')

@section('content')
<br>
<div style="display:flex;flex-wrap:wrap">    
    @if($vignettes != null & count($vignettes) > 0)
        <table>
            <tr>
            @foreach ($vignettes as $vignette)
                <td>
                    <img src="{{$vignette->url}}" alt="{{$vignette->legende}}"  height="400" width="400">
                    <div style="display:flex;align-items:center;justify-content:space-around;text-align:center;">
                        <a href="/admin/vignettes/{{$vignette->id}}">voir</a><a href="/admin/vignettes/{{$vignette->id}}/edit">modifier</a><a href="/admin/vignettes/{{$vignette->id}}/delete">supprimer</a>
                    </div>
                </td>
            @endforeach
            </tr>
        </table>
    @endif
</div>

@endsection