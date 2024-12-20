<x-layout>
    <section id="home" class="relative bg-cover bg-center h-screen text-white" style="background-image: url('https://media.themoviedb.org/t/p/w300_and_h450_bestv2/9cqNxx0GxF0bflZmeSMuL5tnGzr.jpg');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 container mx-auto h-full flex flex-col justify-center items-center text-center">
            <h1 class="text-5xl font-bold mb-4">Find Your Favorite Movies</h1>
            <p class="text-lg mb-8">Explore the best collection of movies and rent them with ease.</p>
            <a href="#movies" class="bg-yellow-500 text-black px-6 py-3 rounded-full text-lg font-semibold hover:bg-yellow-400 transition">Browse Movies</a>
        </div>
    </section>
    
    <section id="movies" class="py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-12">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 justify-content-center">
                @foreach($movies as $movie)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ $movie->image }}" alt="{{ $movie->name}}" class="w-full h-72 object-contain">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold">{{ $movie->name }}</h3>
                            <p class="text-gray-600 mt-2">{{ $movie->rating }} / 10</p>
                            <p class="text-gray-800 mt-4">Price only {{ $movie->price }}$</p>
                            <button class="mt-2 bg-blue-800 text-white rounded-lg w-[200px]">
                                <a href='/rent-movies/{{$movie->id}}' class="text-white mt-4">Rent Now</a>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>

