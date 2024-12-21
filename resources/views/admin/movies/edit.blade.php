<x-layout>
    <div class="container h-[80vh]">

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <div class="mt-4">
            <form action="{{ route('admin.movies.update', $movie->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Movie Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $movie->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $movie->price) }}" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image URL</label>
                    <input type="text" class="form-control" id="image" name="image" value="{{ old('image', $movie->image) }}" required>
                </div>

                <div class="mb-3">
                    <label for="rating" class="form-label">Rating</label>
                    <input type="text" class="form-control" id="rating" name="rating" value="{{ old('rating', $movie->rating) }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update Movie</button>
            </form>
        </div>
    </div>
</x-layout>
