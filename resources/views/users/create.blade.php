@extends('layouts.app')

@section('content')

<style>
    .user-form-page {
        min-height: 70vh;
        background: #f5f5f5;
        padding: 50px 20px;
    }

    .user-form-card {
        max-width: 550px;
        margin: 0 auto;
        background: white;
        padding: 35px;
        border-radius: 12px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    }

    .user-form-card h1 {
        text-align: center;
        margin-bottom: 30px;
    }

    .user-form-group {
        margin-bottom: 20px;
    }

    .user-form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
    }

    .user-form-group input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 15px;
    }

    .user-save-btn {
        width: 100%;
        padding: 13px;
        background: #111;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 16px;
    }

    .user-save-btn:hover {
        background: #333;
    }
</style>

<div class="user-form-page">

    <div class="user-form-card">

        <h1>Add New User</h1>

        <form action="{{ route('users.store') }}" method="POST">

            @csrf

            <div class="user-form-group">
                <label>User Name</label>

                <input
                    type="text"
                    name="name"
                    placeholder="Enter user name"
                    required
                >
            </div>

            <div class="user-form-group">
                <label>Email</label>

                <input
                    type="email"
                    name="email"
                    placeholder="Enter email address"
                    required
                >
            </div>

            <div class="user-form-group">
                <label>Phone Number</label>

                <input
                    type="text"
                    name="phone"
                    placeholder="Enter phone number"
                    required
                >
            </div>

            <button type="submit" class="user-save-btn">
                Save User
            </button>

        </form>

    </div>

</div>

@endsection