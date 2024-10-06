<x-layout>

<x-slot:title>Iniciar Sesión</x-slot:title>

<section class="login">
<h2>Iniciar Sesión</h2>

<form action="{{route('auth.actionLogin')}}" method="post" class="container">
@csrf

<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" @error("email") aria-errormessage="error-email" @enderror>
    @error('email')
    <div class="text-danger" id="error-email">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="password" class="form-label">Contraseña</label>
    <input type="password" id="password" name="password" class="form-control" @error("password") aria-errormessage="error-password" @enderror>
    @error('password')
    <div class="text-danger" id="error-password">{{ $message }}</div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">Iniciar Sesión</button>

</form>

</section>

</x-layout>