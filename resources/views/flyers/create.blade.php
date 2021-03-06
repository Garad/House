@extends('layout')

@section('content')
    <div class="container">
        <h1>Selling Your Home</h1>
        <hr>

            <form method="POST" action="/flyers" enctype="multipart/form-data" class="col-md-6">
                @include('flyers.form')

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </form>
    </div>