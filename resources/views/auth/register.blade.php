<!-- resources/views/auth/register.blade.php -->

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <style>
    header { display:flex; justify-content: space-between; align-items: center; padding:1rem; }
    .title { margin: 0 auto; }
    .form-container { width:300px; margin:2rem auto; padding:2rem; border:1px solid #ccc; }
    .input-group { margin-bottom:1rem; text-align:left; }
    .error { color:red; font-size:0.9rem; }
  </style>
</head>
<body>
<header>
  <div></div>
  <h1 class="title">FashionablyLate</h1>
  <a href="{{ route('login') }}">Login</a>
</header>
<main>
  <h2 style="text-align:center;">Register</h2>
  <div class="form-container">
    <form method="POST" action="{{ route('register') }}">
      @csrf
      <div class="input-group">
        <label>お名前</label><br>
        <input type="text" name="name" placeholder="例: 山田太郎" value="{{ old('name') }}" required>
        @error('name')<div class="error">{{ $message }}</div>@enderror
      </div>
      <div class="input-group">
        <label>メールアドレス</label><br>
        <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" required>
        @error('email')<div class="error">{{ $message }}</div>@enderror
      </div>
      <div class="input-group">
        <label>パスワード</label><br>
        <input type="password" name="password" placeholder="例: coachtech1106" required>
        @error('password')<div class="error">{{ $message }}</div>@enderror
      </div>
      <button type="submit">登録</button>
    </form>
  </div>
</main>
</body>
</html>
