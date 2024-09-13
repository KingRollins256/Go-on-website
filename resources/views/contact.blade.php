@extends('layouts.main')
@section('content')
<header class="header">
        <nav class="navbar">
            <div class="logo">Go On</div>
            <ul class="nav-links">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
                <li><a href="{{route('staff')}}">Staff</a></li>
            </ul>
        </nav>
        <div class="hero">
            <h1>Discover New Connections By Contacting Us</h1>
            <div class="hero-image">
                <img src="{{ asset('images/fashion.png')}}" alt="model in blue">
            </div>
           
        </div>
    </header>
@endsection