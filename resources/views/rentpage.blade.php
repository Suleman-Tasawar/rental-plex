<x-layout>

    <h1 class="text-3xl text-center fond-bold">Thanks for renting out <span class="font-bold text-blue-800">{{ $movie->name }}</span></h1>
    <main class = 'w-full max-w-3xl mx-auto h-[80vh] flex flex-col-reverse lg:flex-row justify-center items-center'>
        <form action="">
            <div class="mb-3">
                <label for="name" class="form-label">Rentals Person's Name</label>
                <input type="name" class="form-control" id="name" placeholder="Suleman Tasawar">
              </div>
            <div class="mb-3">
                <label for="emailAddress" class="form-label">Rental Person's Email address</label>
                <input type="email" class="form-control" id="emailAddress" placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label for="detailspage" class="form-label">Enter Rental Persons address here.</label>
                <textarea class="form-control" id="detailspage" rows="3"></textarea>
              </div>
              <div>
                <button class = 'bg-blue-500 text-white rounded-lg w-[200px] h-12 hover:bg-blue-400'>Rent Movie</button>
              </div>
          </form>

          <div class="ml-10 bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ $movie->image }}" alt="{{ $movie->name }}" class="w-full h-72 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold">{{ $movie->name }}</h3>
                <p class="text-gray-600 mt-2">{{ $movie->rating }} / 10</p>
                <p class="text-gray-800 mt-4">{{ $movie->price }}$</p>
            </div>
        </div>

    </main>
</x-layout>