@extends('layouts.page')

@section('content')
<br>
<div style="display:flex;flex-wrap:wrap">    
        <table>
            <tr>
                <td>
                    <img src="{{$vignette->url}}" alt="{{$vignette->legende}}">
                    <div style="display:flex;align-items:center;justify-content:space-around;text-align:center;">
                        <a href="/admin/vignettes/{{$vignette->id}}">voir</a><a href="/admin/vignettes/{{$vignette->id}}/edit">modifier</a><a href="/admin/vignettes/{{$vignette->id}}/delete">supprimer</a>
                    </div>
                </td>
            </tr>
        </table>
</div>

@endsection