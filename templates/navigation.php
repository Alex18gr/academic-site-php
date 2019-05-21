<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="<?php echo basename("index.php"); ?>">My Academic Page</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo "active" ?>">
            <a class="nav-link" href="<?php echo basename("index.php"); ?>">Home</a>
          </li>
          <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'cirr-vitae.php') echo "active" ?>">
            <a class="nav-link" href="<?php echo basename("cirr-vitae.php"); ?>">Curriculum Vitae</a>
          </li>
          <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'publications.php') echo "active" ?>">
            <a class="nav-link" href="<?php echo basename("publications.php"); ?>">Publications</a>
          </li>
          <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'teaching.php') echo "active" ?>">
            <a class="nav-link" href="<?php echo basename("teaching.php"); ?>">Teaching</a>
          </li>
          <li class="nav-item dropdown <?php if (basename($_SERVER['PHP_SELF']) == 'student-grades.php') echo "active" ?>">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Students
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="<?php echo basename("student-grades.php"); ?>">Students Grades</a>
            </div>
          </li>
          <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'contract.php') echo "active" ?>">
            <a class="nav-link" href="<?php echo basename("contract.php"); ?>">Contract</a>
          </li>
            </ul>
            <ul class="navbar-nav my-2 my-lg-0">
            <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'admin.php') echo "active" ?>">
                <a class="nav-link" href="<?php echo basename("admin.php"); ?>">Management</a>
            </li>
            <?php

            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

            if (!(!isset($_SESSION['agent']) || ($_SESSION['agent'] != md5($_SERVER['HTTP_USER_AGENT'])))) {
            ?>
            <span class="navbar-text">
                Logged in as <?php echo $_SESSION['username'] ?>
            </span>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo basename("logout.php"); ?>">Logout</a>
            </li>
            <?php
            }
            ?>
        </ul>
      </div>
</nav>