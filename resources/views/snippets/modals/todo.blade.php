<!-- Modal -->
<div class="modal fade" id="todoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">
            <i class="mdi mdi-checkbox-marked-circle-outline"></i>
            Todo List
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="list-wrapper">
                <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                  @foreach ($allTodos as $todo)
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox" /> {{ $todo->description }} </label>
                      <span class="list-time">{{ $todo->updated_at->diffForHumans() }}</span>
                      <a href="{{ route('todo.delete', $todo->id) }}" class="btn btn-danger" type="button">
                        {{-- Trash --}}
                        <i class="mdi mdi-delete-forever"></i> Trash
                      </a>
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>