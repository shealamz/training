        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Page Heading
            <small>Secondary Text</small>
          </h1>

          <!-- Blog Post -->
          <?php foreach($proses->getPost() as $row) { ?>
          <div class="card mb-4">
            <?php echo cl_image_tag($row['image_news']) ?>  
            <div class="card-body">
              <h2 class="card-title"><?= $row['title']?></h2>
              <p class="card-text"><?= word_limiter($row['news'])?>...</p>
              <a href="index.php?detail&id=<?= $row['id']?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?= tgl_indonesia($row['date_post'])?> at <?= substr($row['date_post'],11,5)?> PM by
              <?php $user = $proses->user()?>
              <a href="#"><?= $user['username']?></a>
            </div>
          </div>
          <?php }?>

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>