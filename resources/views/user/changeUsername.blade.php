@extends('layouts.index')
@section('content')
    <div class="container-fluid my-3 py-3">



        <div class="row mb-5">
            @include('includes.accountSidebar')
            <div class="col-lg-9 mt-lg-0 mt-4">
                <!-- Card Profile -->
                @include('includes.cardProfile')
                @if (auth()->user()->username_changed != 1)
                <form action="{{route('user.username.update')}}" method="POST">
                @csrf
                @method('PATCH')

                    <div class="card mt-4" id="password">
                        <div class="card-header">
                            <h5>Ndrysho username</h5>
                        </div>
                    <div class="card-body pt-0">
                        <label class="form-label">Username</label>
                        <div class="form-group">
                            <input class="form-control" type="text" name="username" placeholder="Shkruani usernamin e ri">
                            @if(session('username_exceeded'))
                                <span style="color:red; ">{{session('username_exceeded')}}</span>
                            @endif
                            @if(session('current_username'))
                                <span style="color:red; ">{{session('current_username')}}</span>
                            @endif
                            @error('username')
                            <span style="color:red; ">{{ $message }}</span>
                            @enderror
                        </div>


                        <h5 class="mt-5 danger">Shënim</h5>
                        <p class="text-muted mb-2">
                            Fjalëkalimi mund të ndërrohet vetëm një herë.
                        </p>

                        <button type="submit" class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">Ndrysho username</button>
                    </div>



        </div>
                </form>
                @else
                    <h6 style="color:red; margin-top: 20px;">Kërkojmë falje, username mund të ndërrohet vetëm një herë.</h6>
                @endif
        </div>

    </div>

@endsection
