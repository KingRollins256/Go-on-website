@extends('layouts.main')
@section('content')
<!-- navigation bar -->

@include('layouts.nav')
   <!-- hero section -->
        <div class="hero">
            <h1>Discover New Possibilities with Fashion</h1>
            <div class="hero-image">
                <img src="{{ asset('images/fashion.png')}}" alt="model in blue">
            </div>
           
        </div>
    </header>
    <section class="features">
        <h2>Features</h2>
        <div class="feature-cards">
            <div class="card">
                <h3>High Class Performance</h3>
                <p>Experience lightning-fast performance from our models on the runway</p>
            </div>
            <div class="card">
                <h3>Customization</h3>
                <p>We’re here to help anytime you need us.</p>
            </div>
            <div class="card">
                <h3>Contests</h3>
                <p>Your Astonishing look is perfect for Awards, So come lets put you at that level you dream of.</p>
            </div>
        </div>
    </section>

    

    <section class="our-story">
        <h2>Our Story</h2>
        <p>Led by the belief that anyone can grow, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti perspiciatis eos saepe, temporibus ea molestias omnis a quos voluptates, eveniet, voluptate quae! Porro tempora molestiae eveniet dolorum possimus minima quod!</p>
    </section>

   
    <footer class="footer">
        <h3>For Any Assistance Required Please Reach Out</h3>
        <form action="#" method="POST" class="contact-form">
            <input type="text" name="firstname" placeholder="First Name">
            <input type="text" name="lastname" placeholder="Last Name">
            <input type="email" name="email" placeholder="Email">
            <textarea name="message" placeholder="Leave us a message"></textarea>
            <button type="submit">Submit</button>
        </form>
        <div class="contact-info">
            <p><strong>Email:</strong> info@goon.com</p>
            <p><strong>Phone:</strong> +256 798800989</p>
            <p><strong>Address:</strong> Kampala Nakawa</p>
        </div>
    </footer>
@endsection
   