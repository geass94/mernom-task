<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
<header class="bg-white shadow-md">
    <div class="container mx-auto p-4">
        <div class="flex items-center justify-between">
            <div id="logo-wrapper">
                <img src="images/logo.png" alt="Logo" class="w-20 h-auto">
            </div>
            <nav id="navigation">
                <div id="secondary-nav" class="hidden md:flex items-center space-x-4">
                    <a href="mailto:test@test.com">info@test.com</a>
                    <ul id="lang-switcher" class="flex space-x-2">
                        <li><a href="#">EN</a></li>
                        <li><a href="#">GR</a></li>
                    </ul>
                </div>
                <div id="primary-nav" class="md:flex items-center space-x-4">
                    <ul class="flex space-x-4">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<main>
    <section id="hero">
        <img src="images/image1.png" alt="Hero" class="w-full">
    </section>
    <section id="left-text-wight-image">
        <div class="container mx-auto flex flex-col md:flex-row items-center bg-white md:space-x-4">
            <div id="left-text" class="md:w-1/2 text-center md:text-left">
                <h2>Title</h2>
                <h3>Subtitle</h3>
                <div id="text">
                    What is Lorem Ipsum?
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                    Why do we use it?
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                </div>
            </div>
            <div id="right-image" class="md:w-1/2">
                <img src="images/image2.png" alt="Wheat" class="w-full h-auto">
            </div>
        </div>
    </section>
    <section id="services-showcase" class="py-8">
        <div class="container mx-auto">
            <h2>Title</h2>
            <div id="icon-wrapper-that-stretches-horizontally" class="flex space-x-4">
                <!-- Add your icons here -->
            </div>
            <div id="columns" class="md:flex items-center space-x-4">
                <div id="text-column" class="md:w-1/2">
                    <p>Text</p>
                    <p>Another Text</p>
                </div>
            </div>
        </div>
    </section>
    <section id="cards-section" class="py-8">
        <div class="container mx-auto">
            <div id="card" class="max-w-md mx-auto bg-white p-4 shadow-md rounded-lg">
                <img src="placeholder-wheat-image.png" alt="Wheat" class="w-full h-auto">
                <div id="card-text">Description is hidden</div>
                <a href="#">Item name</a>
            </div>
        </div>
    </section>
    <section id="carousel">
        <div id="carousel-container">
            <div id="carousel-item">
                <img src="placeholder-partner-logo.png" alt="Partner" class="w-full h-auto">
            </div>
        </div>
    </section>
</main>
<footer class="bg-gray-900 text-white">
    <section id="contact-section" class="py-8">
        <div class="container mx-auto flex flex-col md:flex-row">
            <div id="left-column" class="md:w-1/2">
                <h2>Contact Us</h2>
                <p>Lipsum</p>
                <ul>
                    <li>Address</li>
                    <li>Phone</li>
                    <li>Email</li>
                </ul>
            </div>
            <div id="right-column" class="md:w-1/2">
                <h3>Get in touch</h3>
                <form action="" id="contact-form">
                    <input type="text" name="name" placeholder="Name" class="w-full p-2 my-2 border rounded-lg">
                    <input type="email" name="email" placeholder="Email" class="w-full p-2 my-2 border rounded-lg">
                    <textarea name="message" placeholder="Message" class="w-full p-2 my-2 border rounded-lg"></textarea>
                    <button class="bg-blue-500 text-white py-2 px-4 rounded-lg">Send a message</button>
                </form>
            </div>
        </div>
    </section>
    <section id="map-section" class="py-8">
        <iframe src="some-iframe-with-embed-map" frameborder="0" class="w-full h-96"></iframe>
    </section>
    <section id="newsletter-area" class="bg-gray-800 py-8 text-white">
        <div class="container mx-auto flex flex-col md:flex-row items-center space-y-4 md:space-x-4">
            <a href="#"><img src="images/logo.png" alt="Logo that is aligned to the left" class="w-20 h-auto"></a>
            <form id="newsletter-form" action="" class="flex items-center">
                <input type="email" placeholder="Enter your email" class="w-full md:w-64 p-2 my-2 border rounded-lg">
                <button class="bg-blue-500 text-white py-2 px-4 rounded-lg">Subscribe</button>
            </form>
        </div>
    </section>
    <section id="copyright" class="bg-gray-700 py-4 text-center text-white">
        <div class="container mx-auto">
            <p>This is the center</p>
        </div>
    </section>
</footer>
</body>
</html>
