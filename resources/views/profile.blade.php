@extends('Layout.app')
@section('title', 'Profile')
@section('content')
    <div class="container w-50">
        <div class="card">
            <h4 class="card-header py-3 text-small">{{ Auth::user()->name }}'s Profile
                <a href="{{ route('detail') }}" class="float-end btn btn-primary"><span class="my-auto me-3">Edit</span><i
                        title="Add User Detail" class="fa-solid fa-circle-plus float-end fs-4"></i></a>
                </h4>
            <div class="card-body">
                @if (auth()->user()->profile_photo)
                    <div class="profile_photo_div"><img src="{{ asset('uploads/users/' . auth()->user()->profile_photo) }}"
                            class="profile_photo" width="40px"></div>
                @else
                <div class="profile_photo_div"><img src="{{ asset('images/unknown.png') }}"
                    class="profile_photo" width="40px"></div>
                @endif
                <hr>
                <div class="list-group container w-75">
                    <div class="data list-group-item d-flex justify-content-between">
                        <span>Name</span><span>{{ Auth::user()->name }}</span>
                    </div>
                    <div class="data list-group-item d-flex justify-content-between">
                        <span>email</span><span>{{ Auth::user()->email }}</span>
                    </div>
                    <div class="data list-group-item d-flex justify-content-between">
                        <span>Phone</span><span>{{ Auth::user()->phone }}</span>
                    </div>
                    <div class="data list-group-item d-flex justify-content-between">
                        <span>Age</span><span>{{ Auth::user()->date }}</span>
                    </div>
                    <div class="data list-group-item d-flex justify-content-between">
                        <span>Gender</span>
                        @if (auth()->user()->gender == 'Male')
                        <span><i class="fa-solid fa-mars-double text-danger"></i> {{ Auth::user()->gender }}</span>
                        @elseif (auth()->user()->gender == 'Female')
                            <span><i class="fa-solid fa-venus-double text-danger"></i> {{ Auth::user()->gender }}</span>
                        @elseif (auth()->user()->gender == 'Unknown')
                            <span><i class="fa-solid fa-mars-and-venus text-danger"></i></i>
                                {{ Auth::user()->gender }}</span>
                        @endif
                    </div>
                    <div class="data list-group-item d-flex justify-content-between">
                        <span>Address</span><span>{{ Auth::user()->address }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
