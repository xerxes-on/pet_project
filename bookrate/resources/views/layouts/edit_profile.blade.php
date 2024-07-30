@extends('static')
@section('content')
    <main>
        <div class="edit-profile-container">
            <h1>Edit Profile</h1>
            <form class="edit-profile-form" method="Post" action="{{ route('edit_profile') }}" enctype="multipart/form-data">
                @method("PUT")
                @csrf
                <div class="profile-photo-section">
                    <img src="./assets/images/profile.png" alt="Profile Photo" class="profile-photo">
                    <input type="file" name="profile_picture">
                      <x-input-error :messages="$errors->get('profile_picture')" class="mt-2" />
                </div>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="{{ old( 'name')}}" placeholder="name must be unique">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="username must be unique " value="{{old('username')}}">
                      <x-input-error :messages="$errors->get('username')" class="mt-2" />
                </div>

                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="date_of_birth" value="{{ old('date_of_birth') }}">
                </div>

                <div class="form-group">
                    <label>Gender</label>
                    <div class="radio-group">
                    <select id="gender" name="gender">
                        <option value="m" {{ old('gender') == 'm' ? 'selected' : '' }}>Male</option>
                        <option value="f" {{ old('gender') == 'f' ? 'selected' : '' }}>Female</option>
                        <option value="o" {{ old('gender') == 'o' ? 'selected' : '' }}>Prefer not to say</option>
                    </select>

                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="login-btn">Save Changes</button>
                    <button type="button" class="cancel-btn">Cancel</button>
                </div>
            </form>
        </div>
    </main>
@endsection
