<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'DoodleTech Consulting' }}</title>
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</head>

<body class="h-full overflow-x-hidden">
  <div class="min-h-full dark:bg-gray-900 flex flex-col">

    <x-navbar />

    @if(!empty($heading))
      <x-page-header :heading="$heading" />
    @endif
    
    <main class="flex-1">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        {{$slot}}
      </div>
    </main>
    
    <x-footer />
    
  </div>
</body>

</html>