@extends('layouts.page')

@section('content')
    <form action="/admin/vignettes/create" method="post">
    @csrf
    @method('post')
        <table>
            <tr>
                <td>
                    <label for="legende">legende</label>
                    <input type="text" name="legende" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="description">description</label>
                    <input type="text" name="description" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="url">url (je ne suis pas magicien, entrer l'url)</label>
                    <input type="text" name="url" id="">
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