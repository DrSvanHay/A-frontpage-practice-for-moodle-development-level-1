<div class="jumbotron">
    <h1>Hallo, ein Front-Page insert</h1>
    <p>This component is from bootstrap and is called a jumbotron</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h3>1st thing</h3>
            <p>bla bla bla</p>
            <a href="#">
                <img class="img-fluid" src="moodlebites/frontpageinsert/assets/cylinder.jpg"/>
            </a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h3>2nd thing</h3>
            <p>bla bla bla</p>
            <a href="#">
                <img class="img-fluid" src="moodlebites/frontpageinsert/assets/sphere.jpg"/>
            </a>
        </div>
    </div>
</div>

<?php
    
    global $PAGE, $DB;
    $courses = $DB->get_records('course', null, '',
           'id, fullname, shortname, summary, format,
            startdate, enddate, visible');
?>

<div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <th>Name</th>
        <th>Short name</th>
        <th>Summary</th>
        <th>Action</th>
      </thead>
      <tbody>
      <?php
      foreach ($courses as $course) {
          if ($course->visible) {
          ?>
            <tr>
              <td><?php echo $course->fullname; ?></td>
              <td><?php echo $course->shortname; ?></td>
              <td><?php echo $course->summary; ?></td>
              <?php $link = 'course/view.php?id=' . $course->id; ?>
              <td><a href="<?php echo $link; ?>" class="btn btn-info" role="button">Go</a></td>
            </tr>
          <?php
          }
      }
      ?>
    </tbody>
  </table>
  </div>