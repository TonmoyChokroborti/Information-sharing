


<?php
  
   error_reporting(0);

  
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Development Bangladesh </title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="style/blog.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="#">Subscribe</a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">Development Bangladesh</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
           
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="News_home.php">Home</a>
          <a class="p-2 text-muted" href="#">World</a>
          
          <a class="p-2 text-muted" href="#">Technology</a>
          
          <a class="p-2 text-muted" href="#">Culture</a>
          <a class="p-2 text-muted" href="#">Business</a>
          <a class="p-2 text-muted" href="#">Politics</a>
         
          <a class="p-2 text-muted" href="#">Science</a>
          <a class="p-2 text-muted" href="#">Health</a>
          
          <a class="p-2 text-muted" href="#">Travel</a>
        </nav>
      </div>
      <div class="card" style="width:100% ; height: 20%">
        <img class="card-img-top"  src="https://images.pexels.com/photos/723072/pexels-photo-723072.jpeg?cs=srgb&dl=pexels-jane-d-723072.jpg&fm=jpg" alt="Card image">
        <div class="card-img-overlay">
          <h4 style="color: white">Development Bangladesh</h4>
          <p style="color: yellow" class="card-text">It is a Online  News Portal for development news for Bangladesh  </p>
          <a href="#" class="btn btn-primary">See Profile</a>
          
        </div>
        
      </div>

      <div class="row mb-2">
    <?php
    include('db/connection.php');
    $query1 = mysqli_query($conn," select * from news order by id desc  limit 1,2  ");
    while ($row = mysqli_fetch_array($query1)){
      $catagory = $row['catagory'];
      $date = $row['date'];
      $title = $row['title'];
      $thumbnail = $row['thumbnail'];
    
    ?>

        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary"><?php echo $catagory ; ?></strong>
              <h3 class="mb-0">
                <a class="text-dark" href="single_page.php?single=<?php echo $row['id']; ?>"><?php echo $title ; ?></a>
              </h3>
              <div class="mb-1 text-muted"><?php echo $date ; ?></div>
              
              <a href="single_page.php?single=<?php echo $row['id']; ?>">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="images/<?php echo $thumbnail ?>" alt="Card image cap" width="150">
          </div>
        </div>
      <?php } ?>
        
    </div>

    <main role="main" class="container">
      <div class="row">
        
          <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Single Record 
          </h3>




          

     
            
         
          <div class="blog-post">
      <form action="contact.php" method="post" class="needs-validation" novalidate>
            <div class="form-group">
              <label for="uname">Enter Your Name:</label>
                 <input type="text" class="form-control" id="uname" placeholder="Enter Your Name" name="name" required>
                 <div class="valid-feedback">Valid</div>
                 <div class="invalid-feedback">Please fill out this field</div>
            </div>
             <div class="form-group">
              <label for="email">Email:</label>
                 <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email" required>
                 <div class="valid-feedback">Valid
                 	
                 </div>
                 <div class="invalid-feedback">Please fill out this field</div>
            </div>
            
            
            
            <div class="form-group">
              <label for="comment">Comment:</label>
                  <textarea name="comment" class="form-control" rows="5" id="comment"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-danger">Submit</button>
     </form>
</div>
<?php
include('db/connection.php');
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];
	$query = mysqli_query($conn,"insert into comment(name,email,comment)values('$name','$email','$comment')");
	if ($query){
		echo "<script>alert('your comment has been send')";

	}else{
		echo"Please try again";
	}

}
?>

<script>
	(function () {
		'use strict';
		window.addEventListener('load',function(){
			var forms = document.getElementByClassName('needs-validation');
			var validation = Array.prototype.filter.call(forms,function(form){
				form.addEventListener('submit',function(event){
					if (form.checkValidity() == false){
						event.preventDefault();
						event.stopPropagation();






					}
					form.classList.add('was-validate');
				}, false);
			});
		},false);
	})();
</script>
         







 


         </div>

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">About</h4>
            <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

    <footer class="blog-footer">
      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
