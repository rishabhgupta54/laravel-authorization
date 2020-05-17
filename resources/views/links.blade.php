@extends('layouts.app')
@section('content')
    <ul>
        <li>Admin -> Create</li>
        <li>Admin -> Read</li>
        <li>Admin -> Update</li>
        <li>Admin -> Delete</li>
        <li>Editor -> Read</li>
        <li>Editor -> Update</li>
    </ul>
    <ul>
        @canany(['admin-create'])
            <li>Admin -> Create</li>
        @endcanany
        @canany(['admin-read'])
            <li>Admin -> Read</li>
        @endcanany
        @canany(['admin-update'])
            <li>Admin -> Update</li>
        @endcanany
        @canany(['admin-delete'])
            <li>Admin -> Delete</li>
        @endcanany
        @canany(['admin-delete', 'editor-read'])
            <li>Editor -> Read</li>
        @endcanany
        @canany(['admin-update', 'editor-update'])
            <li>Editor -> Update</li>
        @endcan
    </ul>
@endsection