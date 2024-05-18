<x-main-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2" style="margin-left:2%;">
        <div class="rg:flex">
                    <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">Women In <br> CyberSecurity</h1>
                    <br>
                    <h2 class="text-2xl font-semibold text-gray-800 capitalize lg:text-2xl dark:text-white">Student Chapter At Atmiya University<br>Rajkot</h2>
                    <br>
                    <button class="text-white  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Join Chapter</button>
        </div>

        <img class="rounded-md" src="{{ asset('storage/images/home.jpg') }}" alt="">
        </div>
    </section>
    <!-- component -->
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <h2 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">Latest Events</h2>
            <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
                @foreach ($events as $event)
                    <div class="lg:flex bg-slate-100 rounded-md">
                    <?php
                        $imageUrl = str_replace('public/', '', $event->image);
                        ?>
                        <img class="object-cover w-full h-56 rounded-lg lg:w-64"
                            src="{{ asset('/storage/'.$imageUrl) }}" alt="{{ $event->title }}">
                            

                        <div class="flex flex-col justify-between py-6 lg:mx-6">
                            <a href="{{ route('eventShow', $event->id) }}"
                                class="text-xl font-semibold text-gray-800 hover:underline">
                                {{ $event->title }}
                            </a>

                           <span class="flex flex-wrap space-x-2">
                                @foreach ($event->tags as $tag)
                                    <p class="text-sm p-1 bg-slate-200 rounded-md">{{ $tag->name }}</p>
                                @endforeach
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- About -->
    <section>
    <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2" style="margin-left:2%;">
        <div class="rg:flex">
            <img class="rounded-md" src="{{ asset('storage/images/about.jpg') }}" alt="">
        </div>
        <div>
            <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">About Us</h1>
            <br>
            <p class="dark:text-white">At Women in Cybersecurity, we're dedicated to fostering inclusivity and diversity in the rapidly evolving field of cybersecurity. 
<br>
<br>
Our club serves as a supportive community where individuals of all backgrounds can come together to learn, grow, and excel in this dynamic industry.
<br>
<br>
 Whether you're a seasoned professional or just starting your journey in cybersecurity, our goal is to provide resources, events, and networking opportunities that empower you to succeed. 
<br>
<br>
Join us as we work towards building a safer digital world, one step at a time.</p>
        </div>
        <br>
        </div> 
    </section>
</x-main-layout>
