<x-layout>
    <div class="container">
    <h1 class="mt-5">Movies Management</h1>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <div class="mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Rating</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($movies as $movie)
                    <tr>
                        <td>{{ $movie->name }}</td>
                        <td>{{ $movie->price }}</td>
                        <td>{{ $movie->rating }}</td>
                        <td><img src="{{ $movie->image }}" alt="{{ $movie->name }}" style="width: 100px;"></td>
                        <td>
    
                            <a href="{{ route('admin.movies.edit', $movie->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            
                            <form action="{{ route('admin.movies.destroy', $movie->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        <h3>Create New Movie</h3>
        <form action="{{ route('admin.movies.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Movie Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="image" name="image" required>
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="text" class="form-control" id="rating" name="rating" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Movie</button>
        </form>
    </div>

</div>
</x-layout>
