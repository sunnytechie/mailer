<div class="col-xl-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-black">To do Task List</h4>
        <p class="text-muted">Created by {{ Auth::user()->name }}</p>
        <div class="list-wrapper">
          <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
            @foreach ($todos as $todo)
            <li>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox" /> {{ $todo->description }} </label>
                <span class="list-time">{{ $todo->updated_at->diffForHumans() }}</span>
              </div>
            </li>
            @endforeach
            

            {{-- <li class="completed">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox" checked /> Prepare for presentation </label>
                <span class="list-time">2 Hours Ago</span>
              </div>
            </li> --}}
           
          </ul>
        </div>
        <form action="{{ route('todo.store') }}" method="POST">
          @csrf
        <div class="add-items d-flex flex-wrap flex-sm-nowrap">
          <input type="text" class="form-control" name="description" todo-list-input flex-grow" placeholder="Add task" />
          <button type="submit" class="add btn btn-primary font-weight-regular text-nowrap" id="add-task"> Add Task </button>
        </div>
        </form>
      </div>
    </div>
  </div>