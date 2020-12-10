@extends('back-end.layout.app')

@php
$pageTitle = 'users home page';
$pageDesc = 'you can edit user from here';
@endphp

@section('title')
    {{ $pageTitle }}
@endsection


@section('content')
    @component('back-end.layout.nav-bar', ['navBar_title' => 'Edit User'])

    @endcomponent
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="col-8">
                    <div class="card-body" style="color: white;">
                        <h3 class="card-title" style="color: white;">User Edit</h3>
                        <p class="card-text">
                            {{ $pageDesc }}
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-10 mx-auto">
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @method('PUT')
                    @include('back-end.users.form')
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>

        </div>

    </div>

@endsection