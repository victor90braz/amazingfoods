<form action="{{ route('register.create') }}" method="POST">
    @csrf
    <label for="fullName">FullName</label>
    <input type="text" name="fullName" placeholder="Fullname" value="{{ request('search') }}">
    <button type="submit">Send</button>
</form>
