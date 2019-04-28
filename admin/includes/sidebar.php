<style media="screen">
  .sidebar-sticky{
    background-color: #fff;
    height: 100%;
  }
</style>
<nav class="col-md-2 d-none d-md-block bg-light sidebar">
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">
          <i class="fa fa-home fa-2x"></i>
          <span data-feather="home" style="color:black;"></span>
          Dashboard <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="award.php">
        <i class="fa fa-trophy fa-2x"></i>
      Award bursary
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="open.php">
        <i class="fa fa-unlock fa-2x"></i>
            Open application
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="awarded-list.php">
        <i class="fa fa-file fa-1x"></i>
            Awarded list
        </a>
      </li>
    </ul>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>Saved reports</span>
      <a class="d-flex align-items-center text-muted" href="#">
        <span data-feather="plus-circle"></span>
      </a>
    </h6>
    <ul class="nav flex-column mb-2">
      <li class="nav-item">
        <a class="nav-link" href="newslatter.php">
        <i class="fa fa-newspaper-o fa-1x"></i>
            Create Newslatter
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="newslist.php">
        <i class="fa fa-list fa-1x"></i>
            Notification list
        </a>
      </li>
<?php if (has_permission('admin')): ?>
      <li class="nav-item">
        <a class="nav-link" href="users.php">
          <i class="fa fa-cog fa-2x"></i>
          Admins
        </a>
      </li>
    <?php endif ?>
    </ul>
  </div>
</nav>
