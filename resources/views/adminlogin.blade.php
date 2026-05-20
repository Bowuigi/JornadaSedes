<div>
   <h2>Admin Login</h2>
   <form action="/adminlogin" method="post">
      @csrf
      <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
      @error('email')
         <div style="color:red">{{ $message }}</div>
      @enderror
      <input type="password" name="password" placeholder="Password">
      @error('password')
         <div style="color:red">{{ $message }}</div>
      @enderror
      <button type="submit">Iniciar Sesion</button>
   </form>
</div>
