@extends('layouts.page')

@section('content')

<form action="/admin/vignettes/{{$vignette->id}}/delete" method="post">
    @csrf
    @method('post')
        <table>
            <tr>
                <td>
                    <p>Supprimer ?</p>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="/admin/vignettes/">Annuler</a>
                </td>
                <td>
                    <input type="submit" value="Supprimer">
                </td>
            </tr>
        </table>
    </form>

@endsection