<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Login</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&display=swap" rel="stylesheet" />
  <style> body { font-family: 'Orbitron', monospace; } </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-black via-gray-900 to-black text-gray-200 flex items-center justify-center p-6">
  <div class="w-full max-w-md bg-white/5 border border-pink-600/20 rounded-xl p-6 shadow-lg">
    <h2 class="text-2xl font-bold text-pink-300 mb-4">Sign In</h2>
    <form method="post" action="login.php" class="space-y-4">
      <div>
        <label class="block text-sm text-gray-300">Username</label>
        <input name="username" type="text" class="w-full mt-1 px-3 py-2 rounded-md bg-gray-900 border border-gray-700 text-gray-100 outline-none focus:ring-2 focus:ring-cyan-400" />
      </div>
      <div>
        <label class="block text-sm text-gray-300">Password</label>
        <input name="password" type="password" class="w-full mt-1 px-3 py-2 rounded-md bg-gray-900 border border-gray-700 text-gray-100 outline-none focus:ring-2 focus:ring-cyan-400" />
      </div>
      <div>
        <button type="submit" class="w-full bg-gradient-to-r from-pink-500 to-cyan-400 text-black font-bold py-2 px-4 rounded-md shadow hover:opacity-95">SignUp</button>
      </div>
    </form>
    <p class="mt-4 text-sm text-gray-400">demo credentials: user / pass</p>
  </div>
</body>
</html>

<?php
//will create an acout once i get mysql fetures working
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
}
?>