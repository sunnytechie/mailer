<x-app-layout>

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-md-8">
                <div class="h-100 bg-light rounded pt-4 pb-4">
                    <div style="padding-left: 10px; padding-right: 15px" class="d-flex align-items-center border-bottom justify-content-between mb-2">
                        <h6 class="mb-0">Messages Sent</h6>
                        <a href="{{ route('dashboard') }}">Compose email</a>
                    </div>

                    @foreach ($msgs as $msg)
                    <div style="padding-left: 10px; padding-right: 15px" class="d-flex align-items-center border-bottom py-1">
                        <img class="rounded-circle flex-shrink-0" src="{{ asset('assets/img/logo.png') }}" alt="" style="width: 40px; height: 40px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">{{ $msg->subject }}</h6>
                                <small>Sent {{ $msg->updated_at->diffForHumans() }}</small>
                            </div>
                            <span>{!! $msg->message !!}</span>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>



            <div class="col-sm-12 col-md-6 col-xl-4">
                @include('snippets.todo')
            </div>


        </div>
    </div>


</x-app-layout>