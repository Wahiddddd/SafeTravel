<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #2071B8">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Add the following code in your HTML file, preferably at the end, just before the closing </body> tag -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
            $(document).ready(function() {
                // Function to apply the effect when the "Info Negara" menu item is clicked
                function onInfoNegaraClick() {
                // Add your desired effect here
                // For example, you can change the background color of the menu item when clicked
                $('.nav-link[href="{{route("info-negara")}}"]').css('background-color', '#0882ED');

                // You can add any other effects you want here
                // For example, you can show a modal, load content dynamically, etc.
                }

                // Attach the click event to the "Info Negara" menu item
                $('.nav-link[href="{{route("info-negara")}}"]').click(function(e) {
                onInfoNegaraClick(); // Call the function to apply the effect

                // You can also collapse the navbar after clicking the menu item (optional)
                $('#navbarCenteredExample').collapse('hide');
                });
            });
            </script>

            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <style>

                .navbar a:hover, .dropdown:hover .dropbtn {
                background-color: #0882ED;
                }

            </style>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
            $(document).ready(function() {
                function onhimbauanClick() {
                $('.nav-link[href="{{route("himbauan")}}"]').css('background-color', '#0882ED');
                }

                // Attach the click event to the "Info Negara" menu item
                $('.nav-link[href="{{route("himbauan")}}"]').click(function(e) {
                onhimbauanClick();
                $('#navbarCenteredExample').collapse('hide');
                });
            });
            </script>

            <script>
            $(document).ready(function() {
                function onfunfactClick() {
                $('.nav-link[href="{{route("fun-fact")}}"]').css('background-color', '#0882ED');
                }

                // Attach the click event to the "Info Negara" menu item
                $('.nav-link[href="{{route("fun-fact")}}"]').click(function(e) {
                onfunfactClick();
                $('#navbarCenteredExample').collapse('hide');
                });
            });
            </script>

            <script>
                $(document).ready(function() {
                    function onfunfactClick() {
                    $('.nav-link[href="{{route("fun-fact")}}"]').css('background-color', '#0882ED');
                    }

                    // Attach the click event to the "Info Negara" menu item
                    $('.nav-link[href="{{route("fun-fact")}}"]').click(function(e) {
                    onfunfactClick();
                    $('#navbarCenteredExample').collapse('hide');
                    });
                });
            </script>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse justify-content-center text-white" id="navbarCenteredExample">
                <!-- Left links -->
                <a class="navbar-brand" href="{{route('beranda')}}">
                    <img src={{asset('storage/images/logo.png')}} height="40" alt="Safe Travel Logo" loading="lazy" />
                </a>
                <ul class="navbar-nav mb-2 mb-lg-0 text-white">
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                    <li class="nav-item mx-lg-5 text-white">
                        <a class="nav-link text-white" aria-current="page" href="{{route('info-negara')}}">Info
                            Negara</a>
                    </li>
                    <!-- Navbar dropdown -->
                    <li class="nav-item mx-lg-5 dropdown text-white">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            Pelayanan
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu dropdown-menu-custom" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item text-white" href="{{route('pelayanan-umum')}}">Umum</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{route('pelayanan-dinas')}}">Dinas</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item mx-lg-5">
                        <a class="nav-link text-white" href="{{route('himbauan')}}">Himbauan</a>
                    </li>
                    <li class="nav-item mx-lg-5 dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            Asuransi
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu dropdown-menu-custom" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item text-white" href="{{route('asuransi-perjalanan')}}">Asuransi
                                    Perjalanan</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{route('asuransi-kartu-kredit')}}">Asuransi
                                    Perjalanan
                                    Kartu Kredit</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{route('infografis')}}">Infografis Asuransi
                                    Perjalanan</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item mx-lg-5">
                        <a class="nav-link text-white" href="{{route('fun-fact')}}">Fun Fact</a>
                    </li>
                    <li class="nav-item mx-lg-5 dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            Tips
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu dropdown-menu-custom" aria-labelledby="navbarDropdown">

                            <li>
                                <a class="dropdown-item text-white" href="{{route('tips-umrah')}}">
                                    Umrah</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{route('tips-tki')}}">
                                    TKI</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{route('tips-wisatawan')}}">
                                    Wisatawan</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{route('infografis-tips')}}">Infografis
                                    Tips</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header>
