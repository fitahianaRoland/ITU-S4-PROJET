<!DOCTYPE html>
<html lang="en">
<head>
  <title>Job Dashboard | By Code Info</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/dashboard.css')?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/stat.css')?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body>
  <div class="container">
    <nav>
      <div class="navbar">
        <div class="logo">
          <img src="<?php echo base_url('assets/css/logo.png')?>" alt="">
        </div>
        <ul>
          <li><a href="#">
            <i class="fas fa-user"></i>
            <span class="nav-item">Dashboard</span>
          </a>
          </li>
          <li><a href="#">
            <i class="fas fa-chart-bar"></i>
            <span class="nav-item">Analytics</span>
          </a>
          </li>
          <li><a href="#">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">Jobs Board</span>
          </a>
          </li>
          <li><a href="#">
            <i class="fab fa-dochub"></i>
            <span class="nav-item">Documnents</span>
          </a>
          </li>
          <li><a href="#">
            <i class="fas fa-cog"></i>
            <span class="nav-item">Setting</span>
          </a>
          </li>
          <li><a href="#">
            <i class="fas fa-question-circle"></i>
            <span class="nav-item">Help</span>
          </a>
          </li>
          <li><a href="#" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Logout</span>
          </a>
          </li>
        </ul>
      </div>
    </nav>

    <section class="main">
      <div class="main-top">
        <p>Welcome to my site</p>
      </div>
      <div class="main-body">
        <h1>Recent Jobs</h1>
      </div>
      <div class="search_bar">
        <input type="search" placeholder="Search job here...">
        <select name="" id="">
          <option>Category</option>
          <option>Web Design</option>
          <option>App Design</option>
          <option>App Development</option>
        </select>
        <select class="filter">
          <option>Filter</option>
        </select>
      </div>

      <div class="tags_bar">
        <div class="tag">
          <i class="fas fa-times"></i>
          <span>Programming</span>
        </div>
        <div class="tag">
          <i class="fas fa-times"></i>
          <span>Design</span>
        </div>
        <div class="tag">
          <i class="fas fa-times"></i>
          <span>PHP</span>
        </div>
        <div class="tag">
          <i class="fas fa-times"></i>
          <span>JavaScript</span>
        </div>
      </div>

      <div class="row">
        <p>There are more than <span>400</span> Jobs</p>
        <a href="#">See all</a>
      </div>
      <div class="stat">
        <div class="chart">
            <canvas id="barchart" width="350px" height="150px"></canvas>
        </div>
    </div>
    </div>
    </section>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.0/dist/chart.umd.min.js"></script>
  <script src="<?php echo base_url('assets/js/stat.js')?>"></script>
</body>
</html>