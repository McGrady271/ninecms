<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Grid Template · Bootstrap</title>

    <link href="/css/app.css" rel="stylesheet">
    <script src="/js/app.js"></script>

    <style>
        body{padding-top:65px;}
        .themed-grid-col {
            padding-top: 15px;
            padding-bottom: 15px;
            background-color: rgba(86, 61, 124, .15);
            border: 1px solid rgba(86, 61, 124, .2);
        }

        .themed-container {
            padding: 15px;
            margin-bottom: 30px;
            background-color: rgba(0, 123, 255, .15);
            border: 1px solid rgba(0, 123, 255, .2);
        }
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Container</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown07">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-md-0">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row mb-3">
        <div id="app">@{{message}}</div>
    </div>
    <script>
        let app = new Vue({
            el: '#app',
            data: {
                message: 'Hello Vue.js!'
            }
        })
        console.log(app)
    </script>

    <div class="row mb-3">
        <h1>Bootstrap grid examples</h1>
    </div>

    <p class="lead">Basic grid layouts to get you familiar with building within the Bootstrap grid system.</p>
    <p>In these examples the <code>.themed-grid-col</code> class is added to the columns to add some theming. This is not a class that is available in Bootstrap by default.</p>

    <h2 class="mt-4">Five grid tiers</h2>
    <p>There are five tiers to the Bootstrap grid system, one for each range of devices we support. Each tier starts at a minimum viewport size and automatically applies to the larger devices unless overridden.</p>

    <div class="row mb-3">
        <div class="col-4 themed-grid-col">.col-4</div>
        <div class="col-4 themed-grid-col">.col-4</div>
        <div class="col-4 themed-grid-col">.col-4</div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-4 themed-grid-col">.col-sm-4</div>
        <div class="col-sm-4 themed-grid-col">.col-sm-4</div>
        <div class="col-sm-4 themed-grid-col">.col-sm-4</div>
    </div>

    <div class="row mb-3">
        <div class="col-md-4 themed-grid-col">.col-md-4</div>
        <div class="col-md-4 themed-grid-col">.col-md-4</div>
        <div class="col-md-4 themed-grid-col">.col-md-4</div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-4 themed-grid-col">.col-lg-4</div>
        <div class="col-lg-4 themed-grid-col">.col-lg-4</div>
        <div class="col-lg-4 themed-grid-col">.col-lg-4</div>
    </div>

    <div class="row mb-3">
        <div class="col-xl-4 themed-grid-col">.col-xl-4</div>
        <div class="col-xl-4 themed-grid-col">.col-xl-4</div>
        <div class="col-xl-4 themed-grid-col">.col-xl-4</div>
    </div>

    <h2 class="mt-4">Three equal columns</h2>
    <p>Get three equal-width columns <strong>starting at desktops and scaling to large desktops</strong>. On mobile devices, tablets and below, the columns will automatically stack.</p>
    <div class="row mb-3">
        <div class="col-md-7 themed-grid-col">.col-md-4</div>
        <div class="col-md-1 themed-grid-col">.col-md-4</div>
        <div class="col-md-4 themed-grid-col">.col-md-4</div>
    </div>

    <h2 class="mt-4">Three unequal columns</h2>
    <p>Get three columns <strong>starting at desktops and scaling to large desktops</strong> of various widths. Remember, grid columns should add up to twelve for a single horizontal block. More than that, and columns start stacking no matter the viewport.</p>
    <div class="row mb-3">
        <div class="col-md-2 themed-grid-col">.col-md-3</div>
        <div class="col-md-5 themed-grid-col">.col-md-6</div>
        <div class="col-md-5 themed-grid-col">.col-md-3</div>
    </div>

    <h2 class="mt-4">Two columns</h2>
    <p>Get two columns <strong>starting at desktops and scaling to large desktops</strong>.</p>
    <div class="row mb-3">
        <div class="col-md-8 themed-grid-col">.col-md-8</div>
        <div class="col-md-4 themed-grid-col">.col-md-4</div>
    </div>

    <h2 class="mt-4">Full width, single column</h2>
    <p class="text-warning">
        No grid classes are necessary for full-width elements.
    </p>

    <hr class="my-4">

    <h2 class="mt-4">Two columns with two nested columns</h2>
    <p>Per the documentation, nesting is easy—just put a row of columns within an existing column. This gives you two columns <strong>starting at desktops and scaling to large desktops</strong>, with another two (equal widths) within the larger column.</p>
    <p>At mobile device sizes, tablets and down, these columns and their nested columns will stack.</p>
    <div class="row mb-3">
        <div class="col-md-8 themed-grid-col">
            <div class="pb-3">
                .col-md-8
            </div>
            <div class="row">
                <div class="col-md-6 themed-grid-col">.col-md-6</div>
                <div class="col-md-6 themed-grid-col">.col-md-6</div>
            </div>
        </div>
        <div class="col-md-4 themed-grid-col">.col-md-4</div>
    </div>

    <hr class="my-4">

    <h2 class="mt-4">Mixed: mobile and desktop</h2>
    <p>The Bootstrap v4 grid system has five tiers of classes: xs (extra small, this class infix is not used), sm (small), md (medium), lg (large), and xl (extra large). You can use nearly any combination of these classes to create more dynamic and flexible layouts.</p>
    <p>Each tier of classes scales up, meaning if you plan on setting the same widths for md, lg and xl, you only need to specify md.</p>
    <div class="row mb-3">
        <div class="col-md-8 themed-grid-col">.col-md-8</div>
        <div class="col-6 col-md-4 themed-grid-col">.col-6 .col-md-4</div>
    </div>
    <div class="row mb-3">
        <div class="col-6 col-md-4 themed-grid-col">.col-6 .col-md-4</div>
        <div class="col-6 col-md-4 themed-grid-col">.col-6 .col-md-4</div>
        <div class="col-6 col-md-4 themed-grid-col">.col-6 .col-md-4</div>
    </div>
    <div class="row mb-3">
        <div class="col-6 themed-grid-col">.col-6</div>
        <div class="col-6 themed-grid-col">.col-6</div>
    </div>

    <hr class="my-4">

    <h2 class="mt-4">Mixed: mobile, tablet, and desktop</h2>
    <div class="row mb-3">
        <div class="col-sm-6 col-lg-8 themed-grid-col">.col-sm-6 .col-lg-8</div>
        <div class="col-6 col-lg-4 themed-grid-col">.col-6 .col-lg-4</div>
    </div>
    <div class="row mb-3">
        <div class="col-6 col-sm-4 themed-grid-col">.col-6 .col-sm-4</div>
        <div class="col-6 col-sm-4 themed-grid-col">.col-6 .col-sm-4</div>
        <div class="col-6 col-sm-4 themed-grid-col">.col-6 .col-sm-4</div>
    </div>

</div>

<div class="container" id="containers">
    <h2 class="mt-4">Containers</h2>
    <p>Additional classes added in Bootstrap v4.4 allow containers that are 100% wide until a particular breakpoint.</p>
</div>

<div class="container themed-container">.container</div>
<div class="container-sm themed-container">.container-sm</div>
<div class="container-md themed-container">.container-md</div>
<div class="container-md themed-container">
    <hr class="my-4">

    <h2 class="mt-4">Mixed: mobile, tablet, and desktop</h2>
    <div class="row mb-3">
        <div class="col-sm-6 col-lg-8 themed-grid-col">
            <div class="row mb-3">
                <div class="col-6 col-sm-4 themed-grid-col">.col-6 .col-sm-4</div>
                <div class="col-6 col-sm-4 themed-grid-col">.col-6 .col-sm-4</div>
                <div class="col-6 col-sm-4 themed-grid-col">.col-6 .col-sm-4</div>
            </div>
        </div>
        <div class="col-6 col-lg-4 themed-grid-col">.col-6 .col-lg-4</div>
    </div>
    <div class="row mb-3">
        <div class="col-6 col-sm-4 themed-grid-col">.col-6 .col-sm-4</div>
        <div class="col-6 col-sm-4 themed-grid-col">.col-6 .col-sm-4</div>
        <div class="col-6 col-sm-4 themed-grid-col">.col-6 .col-sm-4</div>
    </div>

</div>
<div class="container-lg themed-container">.container-lg</div>
<div class="container-xl themed-container">.container-xl</div>
<div class="container-fluid themed-container">.container-fluid</div>
</body>
</html>
