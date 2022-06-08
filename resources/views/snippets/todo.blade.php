<div class="h-100 bg-light rounded p-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h6 class="mb-0">To Do List</h6>
    </div>
    <form action="{{ route('todo.store') }}" method="POST">
        @csrf
        <div class="d-flex mb-2">
            <input class="form-control bg-transparent" type="text" name="description" placeholder="Enter task">
            <button style="color: #000" type="submit" class="btn btn-primary ms-2">Add</button>
        </div>
    </form>
    
    @foreach ($todos as $todo)
    <div class="d-flex align-items-center border-bottom py-2">
        <div class="w-100">
            <div class="d-flex w-100 align-items-center justify-content-between">
                <span>{{ $todo->description }}</span>
                <a href="{{ route('todo.delete', $todo->id) }}" class="btn btn-sm"><i class="fa fa-times"></i></a>
            </div>
        </div>
    </div>
    @endforeach
    
    
</div>