@extends('layouts.app')

@section('content')

<style>
    .users-page {
        min-height: 70vh;
        background: #f5f5f5;
        padding: 40px 20px;
    }

    .users-container {
        width: 100%;
        max-width: 1200px;
        margin: auto;
    }

    .users-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
    }

    .users-header h1 {
        margin: 0;
    }

    .add-user-btn {
        padding: 11px 18px;
        background: #111;
        color: white;
        text-decoration: none;
        border-radius: 6px;
    }

    .users-table-card {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        overflow-x: auto;
    }

    .users-table {
        width: 100%;
        border-collapse: collapse;
    }

    .users-table th {
        background: #111;
        color: white;
        padding: 14px;
        text-align: left;
    }

    .users-table td {
        padding: 14px;
        border-bottom: 1px solid #ddd;
    }

    .users-table tr:hover {
        background: #f8f8f8;
    }

    .edit-btn {
        display: inline-block;
        padding: 7px 12px;
        background: #2563eb;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        margin-right: 5px;
    }

    .delete-btn {
        padding: 7px 12px;
        background: #dc2626;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .delete-form {
        display: inline;
    }
</style>

<div class="users-page">

    <div class="users-container">

        <div class="users-header">

            <h1>Users</h1>

            <a href="{{ route('users.create') }}" class="add-user-btn">
                + Add User
            </a>

        </div>

        <div class="users-table-card">

            <table class="users-table">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($users as $user)

                    <tr>

                        <td>{{ $user->id }}</td>

                        <td>{{ $user->name }}</td>

                        <td>{{ $user->email }}</td>

                        <td>{{ $user->phone }}</td>

                        <td>

                            <a
                                href="{{ route('users.edit', $user->id) }}"
                                class="edit-btn">
                                Edit
                            </a>

                            <form
                                action="{{ route('users.destroy', $user->id) }}"
                                method="POST"
                                class="delete-form">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="delete-btn"
                                    onclick="return confirm('Are you sure you want to delete this user?')">

                                    Delete

                                </button>

                            </form>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection