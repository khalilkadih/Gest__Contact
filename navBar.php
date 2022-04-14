<nav class="navbar  navbar-expand-lg navbar-light bg-white shadow sticky-top">
    <div class="container">
            <a class="navbar-brand "href="index.php">
                <img src="contact.php" alt="contact" class="w-25">
            </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active"  href="<?php base_url('index.php')?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php base_url('signin.php')?>">Login</a>
                </li>
                <li class="nav-item">
                     <a class="nav-link" href="<?= base_url('signup.php')?>">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>