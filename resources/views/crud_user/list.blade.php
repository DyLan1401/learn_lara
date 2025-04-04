@extends('dashboard')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f4f4f4;
    }

    .container {
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .action-links a {
        margin-right: 10px;
        text-decoration: none;
        color: #1877f2;
    }

    .pagination {
        display: flex;
        justify-content: center;
        padding: 15px;
    }

    .pagination a {
        margin: 0 5px;
        text-decoration: none;
        color: #1877f2;
    }

    .pagination a.active {
        font-weight: bold;
        color: black;
    }

    .footer {
        text-align: center;
        padding: 10px;
        color: #888;
        font-size: 0.9em;
    }
</style>

<body>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Avatar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <th>{{ $user->id }}</th>
                    <th>{{ $user->name }}</th>
                    <th>{{ $user->email }}</th>
                    <th>
    @if($user->avatar)
        <img src="{{ asset($user->avatar) }}" alt="{{ $user->name }}" width="50">
    @else
        <img src="{{ asset('avatars/default.png') }}" alt="Default Avatar" width="50">
    @endif
</th>
                    <th>
                        <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> |
                        <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> |
                        <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="footer">
            Lập trình web @2024
        </div>

        @endsection