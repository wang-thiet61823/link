<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="referrer" content="no-referrer">
    <link rel="icon" href="{{ asset('assets/images/fb_icon.ico') }}" type="image/x-icon" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta property="og:image" content="https://i.imgur.com/dPbn7je.jpg" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @yield('content')
    <script>
  // Chặn chuột phải
  document.addEventListener("contextmenu", function (e) {
    e.preventDefault();
  });

  // Chặn phím tắt
  document.addEventListener("keydown", function (e) {
    if (
      e.ctrlKey && (e.key === 'u' || e.key === 'U' || e.key === 'c' || e.key === 's') || // Ctrl+U, Ctrl+C, Ctrl+S
      e.key === 'F12' ||
      (e.ctrlKey && e.shiftKey && (e.key === 'I' || e.key === 'J')) // Ctrl+Shift+I, J
    ) {
      e.preventDefault();
    }
  });
</script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
