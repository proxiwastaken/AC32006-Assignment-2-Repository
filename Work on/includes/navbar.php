<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <div class="brand-content">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bicycle" viewBox="0 0 16 16">
                    <path d="M4 4.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1v.5h4.14l.386-1.158A.5.5 0 0 1 11 4h1a.5.5 0 0 1 0 1h-.64l-.311.935.807 1.29a3 3 0 1 1-.848.53l-.508-.812-2.076 3.322A.5.5 0 0 1 8 10.5H5.959a3 3 0 1 1-1.815-3.274L5 5.856V5h-.5a.5.5 0 0 1-.5-.5m1.5 2.443-.508.814c.5.444.85 1.054.967 1.743h1.139zM8 9.057 9.598 6.5H6.402zM4.937 9.5a1.997 1.997 0 0 0-.487-.877l-.548.877zM3.603 8.092A2 2 0 1 0 4.937 10.5H3a.5.5 0 0 1-.424-.765l1.027-1.643zm7.947.53a2 2 0 1 0 .848-.53l1.026 1.643a.5.5 0 1 1-.848.530L11.55 8.623z"/>
                </svg>
                <span class="navbar-text">Dundee District</span>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <!-- PHP for checking active page inspired by: https://stackoverflow.com/questions/39217939/active-navigation-bar-with-php -->
                <a class="nav-link nav-link-1 <?php if($_SERVER['SCRIPT_NAME']=="/AC32006-Assignment-2-Repository/Work on/index.php") {echo "active\" aria-current=\"page\"";} else {echo "\"";} ?> href="index.php">index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-3 <?php if($_SERVER['SCRIPT_NAME']=="/AC32006-Assignment-2-Repository/Work on/about.php") {echo "active\" aria-current=\"page\"";} else {echo "\"";} ?> href="about.php">About</a>
            </li>
        </ul>
        </div>
    </div>
</nav>