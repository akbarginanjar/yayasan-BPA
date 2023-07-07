@if (Auth::user()->hasRole('admin'))
    <script>
        window.location = "/admin/dashboard";
    </script>
@endif
