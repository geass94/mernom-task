<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header>
    <nav class="relative container mx-auto">
        <div class="flex items-center justify-between ">
            <div class="pt-2">
                <img src="images/logo.png" alt="Logo">
            </div>
            <div class="hidden md:flex w-full flex-col space-y-4 pb-2 border-b border-solid border-b-2 border-amber-400">
                <div class="flex justify-end">
                    <ul class="flex flex-inline space-x-4">
                        <li><a href="mailto:info@company.com">info@company.com</a></li>
                        <li><a href="#">EN</a></li>
                        <li><a href="#">GR</a></li>
                    </ul>
                </div>
                <div class="flex justify-end">
                    <ul class="flex flex-inline space-x-4 ">
                        <li><a href="#" class="hover:text-grey">About Us</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Search</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>
</header>
<main>
    <section id="hero">
        <div class="w-full py-1 ">
            <img src="images/image1.png" class="w-full object-contain h-1/5" alt="Hero">
        </div>
    </section>
    <section id="about-us">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-1 px-6 md:px-0">
                <div class="flex flex-col space-y-4 pt-6">
                    <h2 class="text-4xl text-gray-700 uppercase font-bold">About Us</h2>
                    <h3 class="text-2xl text-amber-400">Lorem ipsum</h3>
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda at aut consequuntur dicta earum eos est ipsam itaque iure nesciunt nisi obcaecati, optio, placeat praesentium saepe totam ullam voluptatem!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda at aut consequuntur dicta earum eos est ipsam itaque iure nesciunt nisi obcaecati, optio, placeat praesentium saepe totam ullam voluptatem!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda at aut consequuntur dicta earum eos est ipsam itaque iure nesciunt nisi obcaecati, optio, placeat praesentium saepe totam ullam voluptatem!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda at aut consequuntur dicta earum eos est ipsam itaque iure nesciunt nisi obcaecati, optio, placeat praesentium saepe totam ullam voluptatem!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda at aut consequuntur dicta earum eos est ipsam itaque iure nesciunt nisi obcaecati, optio, placeat praesentium saepe totam ullam voluptatem!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda at aut consequuntur dicta earum eos est ipsam itaque iure nesciunt nisi obcaecati, optio, placeat praesentium saepe totam ullam voluptatem!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda at aut consequuntur dicta earum eos est ipsam itaque iure nesciunt nisi obcaecati, optio, placeat praesentium saepe totam ullam voluptatem!</p>
                    </div>
                </div>
                <div>
                    <img src="images/image2.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="bg-slate-300">
        <div class="container mx-auto py-24">
            <div class="px-6 md:px-0">
                <h2 class="text-4xl text-gray-700 uppercase font-bold">Services</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-3 py-4">
                    <div class="text-block">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae debitis ex, incidunt nihil nobis praesentium quo totam ut! Accusamus architecto blanditiis delectus incidunt ipsa iste labore laudantium nemo ratione voluptatibus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae debitis ex, incidunt nihil nobis praesentium quo totam ut! Accusamus architecto blanditiis delectus incidunt ipsa iste labore laudantium nemo ratione voluptatibus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae debitis ex, incidunt nihil nobis praesentium quo totam ut! Accusamus architecto blanditiis delectus incidunt ipsa iste labore laudantium nemo ratione voluptatibus.</p>
                    </div>
                    <div class="text-block">
                        <ul class="list-disc">
                            <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium animi at, commodi debitis dicta distinctio dolore incidunt, itaque laborum minima minus praesentium quaerat qui rem repellat tempore velit voluptas.</p></li>
                            <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium animi at, commodi debitis dicta distinctio dolore incidunt, itaque laborum minima minus praesentium quaerat qui rem repellat tempore velit voluptas.</p></li>
                            <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium animi at, commodi debitis dicta distinctio dolore incidunt, itaque laborum minima minus praesentium quaerat qui rem repellat tempore velit voluptas.</p></li>
                            <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium animi at, commodi debitis dicta distinctio dolore incidunt, itaque laborum minima minus praesentium quaerat qui rem repellat tempore velit voluptas.</p></li>
                        </ul>
                    </div>
                    <div class="text-block">
                        <ul class="list-disc">
                            <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ducimus est facere illum inventore iusto labore minima, minus optio, quas recusandae soluta, tempora! Beatae molestias nesciunt omnis reprehenderit repudiandae, tenetur!</p></li>
                            <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ducimus est facere illum inventore iusto labore minima, minus optio, quas recusandae soluta, tempora! Beatae molestias nesciunt omnis reprehenderit repudiandae, tenetur!</p></li>
                            <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ducimus est facere illum inventore iusto labore minima, minus optio, quas recusandae soluta, tempora! Beatae molestias nesciunt omnis reprehenderit repudiandae, tenetur!</p></li>
                            <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ducimus est facere illum inventore iusto labore minima, minus optio, quas recusandae soluta, tempora! Beatae molestias nesciunt omnis reprehenderit repudiandae, tenetur!</p></li>
                            <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ducimus est facere illum inventore iusto labore minima, minus optio, quas recusandae soluta, tempora! Beatae molestias nesciunt omnis reprehenderit repudiandae, tenetur!</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="products">
        <div class="container mx-auto">
            <div class="px-6 md:px-0 md:py-24">
                <h2 class="text-gray-700 text-4xl uppercase font-bold">Products</h2>
                <div class="grid grid-cols-3 gap-0.5 py-24">
                    <div class="relative h-12">
                        <img src="images/image2.png" alt="Wheat" class="absolute top-0 left-0 z-0">
                        <div class="relative z-10">
                            <h3>Wheat</h3>
                            <div class="descrption hidden">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aspernatur autem consequatur dolor doloremque dolores, et hic illum incidunt maiores molestias nihil, non omnis praesentium quos reiciendis rem rerum sapiente!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>

</footer>
</body>
</html>
