<x-layout>
    <h1 class="text-3xl text-center fond-bold">Contact Page</h1>
    <section class="h-[80vh]">
      <form action="">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="name" class="form-control" id="name" placeholder="Suleman Tasawar">
          </div>
        <div class="mb-3">
            <label for="emailAddress" class="form-label">Email address</label>
            <input type="email" class="form-control" id="emailAddress" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="detailspage" class="form-label">Enter your detailed message here.</label>
            <textarea class="form-control" id="detailspage" rows="3"></textarea>
          </div>
          <div>
            <button class = 'bg-blue-500 text-white rounded-lg w-[200px] h-12 hover:bg-blue-400'>Send Message</button>
          </div>
      </form>
    </section>
</x-layout>