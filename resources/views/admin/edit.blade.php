@extends('layouts.page')

@section('content')
    <form action="/admin/vignettes/{{$vignette->id}}/edit" method="post">
    @csrf
    @method('post')
        <table>
            <tr>
                <td>
                    <label for="legende">legende</label>
                    @if(!empty($vignette->legende))
                        <input type="text" name="legende" id="" value="{{$vignette->legende}}">
                    @else
                        <input type="text" name="legende" id="">
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label for="description">description</label>
                    @if(!empty($vignette->description))
                        <input type="text" name="description" id="" value="{{$vignette->description}}">
                    @else
                        <input type="text" name="description" id="">
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label for="url">url (je ne suis pas magicien, entrer l'url)</label>
                    @if(!empty($vignette->url))
                        <input type="text" name="url" id="" value="{{$vignette->url}}">
                    @else
                        <input type="text" name="url" id="">
                    @endif
                </td>
            </tr>
            <!-- <tr>
                <td>
                    <label for="affichable">afficher l'image</label>
                    <input type="checkbox" name="affichable" id="">
                </td>
            </tr> -->
            <tr>
                <td>
                    <input type="submit" value="Créer">
                </td>
            </tr>
        </table>
    </form>
@endsection