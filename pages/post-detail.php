        <!-- Post Content Column -->
        <div class="col-lg-8">
          
          <?php $row = $proses->getDetail($_GET['id']); ?>
          <!-- Title -->
          <h1 class="mt-4"><?= $row['title']?></h1>

          <!-- Author -->
          <p class="lead">
            by
            <?php $user = $proses->user()?>
            <a href="#"><?= $user['username']?></a>
          </p>

          <hr>
      
          <!-- Date/Time -->
          <p>Posted on <?= tgl_indonesia($row['date_post'])?> at <?= substr($row['date_post'],11,5)?> PM</p>

          <hr>

          <!-- Preview Image -->

          <?php echo cl_image_tag($row['image_news'], array("width" => 720, "crop" => "fill")); ?>  


          <hr>

          <!-- Post Content -->
          <p class="lead"><?= $row['news']?></p>

          <blockquote class="blockquote">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer class="blockquote-footer">Someone famous in
              <cite title="Source Title">Source Title</cite>
            </footer>
          </blockquote>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

          <hr>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form action="" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control" name="username" placeholder="Nama"><br>
                  <textarea class="form-control" rows="3" name="reply" placeholder="Pesan"></textarea>
                  <input type="hidden" name="id" value="<?= $_SESSION['id_comment']?>">
                  <input type="hidden" name="post_id" value="<?= $row['id']?>">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              </form>
              <?php if(isset($_POST['submit'])) $comment->saveComment($_POST); ?>
            </div>
          </div>

          <!-- Single Comment -->
          <?php foreach($comment->getComment($_GET['id']) as $row) {?>
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0"><?= $row['username']?></h5>
              <p><?= $row['reply']?></p>
            </div>
          </div>
          <?php }?>
        </div>      