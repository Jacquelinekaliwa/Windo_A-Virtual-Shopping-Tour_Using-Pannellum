<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopNavigator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/three@0.124.0/build/three.min.js"></script>
    <script src="{{ asset('javascript/panolens.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar d-flex justify-content-between p-4">
        <h2>ShopNavigator</h2>
        <div>
            <a href="#hero">Home</a>
            <a href="#about">About</a>
            <a href="#products">Virtual Tour</a>
            <a href="#contact" class="contact-btn btn">Contact</a>
        </div>

        <form action="{{ url('/search') }}" method="GET" class="d-flex">
         <input type="text" name="query" class="form-control me-2" placeholder="Search..." />
         <button type="submit" class="btn btn-success">Search</button>
     </form>

    </nav>

<!-- Hero Section -->
<section id="hero" class="hero d-flex align-items-center" style="background-image: url('/images/Lilongwe_drone_image.jpg'); background-size: cover; background-position: center;">
    <div class="container text-start">
        <h1 class="text-white">Get a shoping cart ready!</h1>
        <p class="text-white">As you enjoy these amazing views of shopping districts in Malawi, feel the moment as you look right at it!</p>
        <a href="#products" class="btn btn-success mt-3">View Virtual Tour</a>
    </div>
</section>

<div class="container text-center mt-5">
    <select id="category" class="form-select w-50 mx-auto" onchange="window.location.href=this.value;">
        <option value="#">Select a Category</option>
        <option value="/category/fashion">Fashion</option>
        <option value="/category/electronics">Electronics</option>
        <option value="/category/groceries">Groceries</option>
    </select>
</div>

 <!-- About Section -->
 <section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-2">
                <img src="/images/city-super.jpg" alt="Image of Lilongwe" class="img-fluid">
            </div>
            <div class="col-md-6 order-md-1">
                <h2>Discover Lilongwe</h2>
                <p>Your shopping guide awaits.</p>
                <p>Explore the vibrant shopping districts of Lilongwe, Malawi, with our interactive web application. Navigate through popular areas like Town and City Centre, visit renowned shops such as Sana and Chipiku, and enjoy virtual tours showcasing their interiors</p>
                <p>Dive into a seamless shopping experience that brings the heart of Lilongwe right to your fingertips!</p>
            </div>
        </div>
    </div>
</section>


<!-- Vt Card section -->
<section id="products" class="products p-5">
<div class="container my-5">
    <h3 class="text-center">Find What You Love Easily</h3>
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="card shadow">
                <img src="/images/Shoprite.jpg" class="card-img-top" alt="Shoprite">
                <div class="card-body text-center">
                    <h5 class="card-title">Shoprite</h5>
                    <p class="card-text">Experience being there with this virtual tour.</p>
                    <a href="{{ url('/tour') }}"class="btn btn-success">Go to Virtual Tour</a>
                </div>
            </div>
        </div>
       
    </div>
</div>

</section>
    <!-- Contact Section -->
    <section id="contact" class="p-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Get in Touch</h2>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Jane Smith">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="email@website.com">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phone" placeholder="555-555-5555">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h2>Location & Hours</h2>
                    <p>Email: <a href="mailto:windo.lilongwe55@email.com">windo.lilongwe55@email.com</a></p>
                    <p>Location: Lilongwe, Malawi</p>
                    <p>Hours:</p>
                    <ul>
                        <li>Monday - Friday: 9:00am - 10:00pm</li>
                        <li>Saturday: 9:00am - 12:00pm</li>
                        <li>Sunday: 9:00am - 12:00pm</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
       window.addEventListener('DOMContentLoaded', () => {
    const slideUpElements = document.querySelectorAll('.slide-up');
    slideUpElements.forEach(element => {
        element.classList.add('active');
    });
});
    </script>
</body>
</html>
