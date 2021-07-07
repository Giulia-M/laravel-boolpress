@extends('layouts.app')
@section('content')
  <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Tutti gli utenti</h1>

                  
                    <div class="form-group">
                    <a href="{{route("admin.userdetails.create")}}" class="btn btn-success">
                        Crea utente
                        </button>
                    </a>
                   
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>nome</th>
                        <th>città</th>
                        <th>indirizzo</th>
                        <th>provincia</th>
                        <th>code zip</th>
                        <th>Data di Nascita</th>
                        <th>Luogo di Nascita</th>
                    </tr>
                    </thead>

                    {{-- <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->city }}</td>      
                            </tr>
                        @endforeach
                    </tbody> --}}
                </table>
            </div>
        </div>
    </div>
@endsection