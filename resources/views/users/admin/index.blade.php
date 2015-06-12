@extends('admin')

@section('title', '- Utilisateurs')

@section('content')
        <h1 class="page-header">Utilisateurs</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Pôle</th>
                    <th>Rang</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>---</td>
                        <td>
                            {!! $user->rank == 'admin' ? "<span class='label label-success'>Administrateur</span>" : "<span class='label label-default'>Utilisateur</span>" !!}
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.users.edit', $user) }}">Editer</a>
                            <a class="btn btn-danger" href="{{ route('admin.users.destroy', $user) }}" data-method="delete" data-confirm="Etes vous vraiment sûr de vouloir supprimer cet utilisateur.">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection