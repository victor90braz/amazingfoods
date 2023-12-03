<form action="{{ route('register.store') }}" method="POST">
    @csrf

    <div>
        <label for="fullName">Full Name</label>
        <!-- Use old() to repopulate the field with the previously entered value -->
        <input type="text" name="fullName" value="{{ old('fullName') }}" autocomplete="current-fullName">
    </div>

    <div>
        <label for="email">Email</label>
        <!-- Use old() to repopulate the field with the previously entered value -->
        <input type="email" name="email" value="{{ old('email') }}" autocomplete="current-email">
    </div>

    <div>
        <label for="password">Password</label>
        <!-- Use old() to repopulate the field with the previously entered value -->
        <input type="password" name="password" value="{{ old('password') }}" autocomplete="current-password">
    </div>

    <!-- Display error messages for the 'fullName' field -->
    @error('fullName')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

    <!-- Display error messages for the 'email' field -->
    @error('email')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

    <!-- Display error messages for the 'password' field -->
    @error('password')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

    <button type="submit">Send</button>
</form>
