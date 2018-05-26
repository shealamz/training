
<div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">

              <form action="index.php?search" method="post">
              <div class="input-group">
                <input type="text" class="form-control" name="keyword" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="submit" name="search">Go!</button>
                  <?php if(isset($_POST['search'])) $proses->searchPost($_POST); ?>
                </span>
              </div>
              </form>

            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <?php foreach ($row = $proses->getCategory() as $row ) {?>
                    <li>
                      <a href="index.php?category=<?= $row['id']?>"><?= $row['category_name']?></a>
                    </li>
                    <?php }?>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>

        </div>