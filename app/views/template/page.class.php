<?php
    require_once('../app/helpers/validators.class.php');
    require_once('../app/helpers/component.class.php');
    
    class Page extends Component{
        public static function templateHeader($title)
        {
            print("
            <!DOCTYPE html>
            <html lang='en'>
                <head>
                    <meta charset='utf-8' />
                    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
                    <meta name='description' content='' />
                    <meta name='author' content='' />
                    <title>$title</title>
                    <link rel='stylesheet' href='../web/css/style.css'>
                    <!-- Favicon-->
                    <link rel='icon' type='image/x-icon' href='../web/img/favicon.ico' />
                    <!-- Bootstrap icons-->
                    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css' rel='stylesheet' />
                    <!-- Core theme CSS (includes Bootstrap)-->
                    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
                    <!--SweetAlert -->
                    <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
                </head>
                <body class='d-flex flex-column hv-100'>
                    <main class='flex-shrink-0'>
            ");
        }

        public static function templateFooter()
        {
            print("
                    </main>
                    <!-- Footer-->
                    <footer class='footer mt-auto py-3 bg-dark'>
                        <div class='container'>
                            <p class='m-0 text-center text-white'>Copyright &copy; Xavier Canjura and Salvador Gonzalez 2022</p>
                        </div>
                    </footer>
                    <!-- Bootstrap core JS-->
                    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js'></script>
                    <!-- Core theme JS-->
                    <script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
                    <script src='../web/js/bootstrap.min.js'></script>
            
                </body>
            </html>
            ");
        }

        public static function templateNavbarPublic()
        {
            print("
            <!-- Navigation-->
            <nav class='navbar navbar-expand-lg navbar-light bg-light'>
                <div class='container px-4 px-lg-5'>
                    <a class='navbar-brand' href='#!'>TextilExport</a>
                    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
                    <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                        <ul class='navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4'>
                            <li class='nav-item'><a class='nav-link active' aria-current='page' href='./'>Home</a></li>
                        </ul>
                        <ul class='navbar-nav d-flex mb-2 mb-lg-0 ms-lg-4'>
                            <li class='nav-item'><a class='nav-link' href='../dashboard/'>Administración</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            ");
        }

        public static function templateNavbarDash()
        {
            print("
            <!-- Navigation-->
            <nav class='navbar navbar-expand-lg navbar-light bg-light '>
                <div class='container px-4 px-lg-5'>
                    <a class='navbar-brand' href='#!'>TextilExport</a>
                    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
                    <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                        <ul class='navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4'>
                            <li class='nav-item'><a class='nav-link active' aria-current='page' href='index.php'>Productos</a></li>
                        </ul>
                        <ul class='navbar-nav d-flex mb-2 mb-lg-0 ms-lg-4'>
                            <li class='nav-item'><a class='nav-link' href='../public/'>Público</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            ");
        }

        public static function templateSlider()
        {
            print("
            <!-- Header-->
            <header class='bg-dark py-5'>
                <div class='container px-4 px-lg-5 my-5'>
                    <div class='text-center text-white'>
                        <h1 class='display-4 fw-bolder'>Shop in style</h1>
                        <p class='lead fw-normal text-white-50 mb-0'>With this shop hompeage template</p>
                    </div>
                </div>
            </header>
            ");
        }
    }
?>