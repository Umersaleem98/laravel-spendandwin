@include('layouts.head')
<body>
    
    @include('layouts.header')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-sm p-4 w-100" style="max-width: 500px;">
        <h4 class="text-center mb-4">Register</h4>

        {{-- Display session error --}}
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        {{-- Display validation errors --}}
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ url('auth.register') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input 
                    type="text" 
                    name="name" 
                    id="name" 
                    class="form-control" 
                    placeholder="Enter your name"
                    value="{{ old('name') }}"
                    required
                >
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    class="form-control" 
                    placeholder="Enter your email"
                    value="{{ old('email') }}"
                    required
                >
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input 
                    type="password" 
                    name="password" 
                    id="password" 
                    class="form-control" 
                    placeholder="Enter password"
                    required
                >
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input 
                    type="password" 
                    name="password_confirmation" 
                    id="password_confirmation" 
                    class="form-control" 
                    placeholder="Confirm password"
                    required
                >
            </div>

            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-success">Register</button>
            </div>

            <div class="text-center">
                <a href="{{ url('login') }}">Already have an account? Login</a>
            </div>
        </form>
    </div>
</div>

@include('layouts.script')

</body>
</html>
