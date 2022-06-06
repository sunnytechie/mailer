<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Widgets Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">

            <div class="col-sm-12 col-md-8">
                {{-- Compose email --}}
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Compose Email</h3>
                    </div>
                    @if(Session::has('success'))
                    <p class="alert alert-info m-2">{{ Session::get('success') }}</p>
                    @endif
                    <div class="card-body">
                        <form action="{{ route('email') }}" method="POST">
                            @csrf
                            
                            <div class="form-floating mb-3">
                                <select class="form-select" 
                                        id="floatingSelect"
                                        name="category_id"
                                        required
                                    aria-label="Floating label select example">
                                    <option selected>Select category</option>

                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                    
                                </select>
                                <label for="floatingSelect">Email Category  </label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" 
                                    class="form-control" 
                                    id="floatingInput"
                                    placeholder="Subject Heading"
                                    name="subject"
                                    required>
                                <label for="floatingInput">Subject</label>
                            </div>

                            <div class="form-floating">
                                <textarea class="form-control" 
                                    placeholder="Write your email here"
                                    name="message"
                                    id="floatingTextarea" style="height: 150px;"></textarea>
                            </div>

                            <div class="py-3">
                                <button style="color: rgb(22, 21, 21)" type="submit" class="btn btn-primary w-50">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="col-sm-12 col-md-6 col-xl-4">
                @include('snippets.todo')
            </div>


        </div>
    </div>

    
    <!-- Widgets End -->

    <!-- Modal -->
</x-app-layout>