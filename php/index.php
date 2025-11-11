<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Clicker</title>

  <!-- Tailwind (CDN quick start) -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Optional: Orbitron font to match original theme -->
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&display=swap" rel="stylesheet" />

  <style>
    /* minimal custom to preserve original font usage */
    body { font-family: 'Orbitron', monospace; }
  </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-black via-gray-900 to-black text-gray-200 p-8 flex flex-col items-center">
  <header class="w-full max-w-4xl">
    <div class="flex top-0 justify-between items-center mb-6">
      <button><a href="login.php" class="inline-block bg-gradient-to-r from-pink-500 to-cyan-400 text-black font-bold py-2 px-4 rounded shadow hover:scale-105 transition">Login</a></button>
      <button><a href="signUp.php" class="inline-block bg-gradient-to-r from-pink-500 to-cyan-400 text-black font-bold py-2 px-4 rounded shadow hover:scale-105 transition">SignUp</a></button>
    </div>
  </header>

  <main class="flex-1 w-full max-w-4xl flex flex-col items-center gap-8 mt-8">
    <h1 id="value" class="text-6xl md:text-8xl font-extrabold text-cyan-300 drop-shadow-[0_0_8px_rgba(0,240,255,0.5)]">0</h1>

    <div class="flex flex-col items-center gap-6">
      <button onclick="best()" class="bg-gray-900 border-2 border-gray-700 text-gray-100 px-6 py-3 rounded-lg shadow-lg hover:scale-105 transform transition">Click me</button>

      <section id="shop" class="w-full bg-gray-900/60 border border-dashed border-gray-700 rounded-xl p-6 md:p-8 shadow-inner ">
        <h2 class="text-2xl font-bold text-pink-400 mb-4">Shop</h2>
        <div class="flex flex-wrap gap-3">
          <button onclick="buy1()" class="px-4 py-2 rounded-md bg-gradient-to-r from-pink-600 to-cyan-400 text-black font-semibold shadow">price: 100</button>
          <button onclick="buy10()" class="px-4 py-2 rounded-md bg-gradient-to-r from-pink-600 to-cyan-400 text-black font-semibold shadow">price: 1000</button>
          <button onclick="buy100()" class="px-4 py-2 rounded-md bg-gradient-to-r from-pink-600 to-cyan-400 text-black font-semibold shadow">price: 10000</button>
          <button onclick="buy1000()" class="px-4 py-2 rounded-md bg-gradient-to-r from-pink-600 to-cyan-400 text-black font-semibold shadow">price: 100000</button>
          <button onclick="buy10000()" class="px-4 py-2 rounded-md bg-gradient-to-r from-pink-600 to-cyan-400 text-black font-semibold shadow">price: 1000000</button>
          <button onclick="buy100000()" class="px-4 py-2 rounded-md bg-gradient-to-r from-pink-600 to-cyan-400 text-black font-semibold shadow">price: 10000000</button>
          <button onclick="buy1000000()" class="px-4 py-2 rounded-md bg-gradient-to-r from-pink-600 to-cyan-400 text-black font-semibold shadow">price: 100000000</button>
        </div>
      </section>

      <div class="text-center">
        <h3 class="text-xl font-semibold text-pink-300">Money per second</h3>
        <h4 id="mmps" class="text-2xl font-bold text-cyan-200">0</h4>
      </div>
    </div>
  </main>

  <script src="js/index.js"></script>
</body>
</html>