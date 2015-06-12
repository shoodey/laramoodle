@extends('admin')

@section('title', '- Utilisateurs')

@section('content')
    <h1 class="page-header">Editer un utilisateur</h1>
    {!! BootForm::open()->put()->action(route('admin.users.update', $user)) !!}
        {!! BootForm::text('Nom', 'name')->value($user->name) !!}
        {!! BootForm::email('Adresse Email', 'email')->value($user->email) !!}
        {!! BootForm::select('Rang', 'rank')->options(['admin' => 'Administrateur', 'user' => 'Utilisateur'])->select($user->rank) !!}
        {!! BootForm::submit('Enregistrer')->addClass('btn-primary pull-right') !!}
    {!! BootForm::close() !!}
@endsection