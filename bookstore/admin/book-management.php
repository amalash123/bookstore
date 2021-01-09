<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Book section</title>
    <style>
      body
            {
                margin:0;
                background:#b8b8ff;
            }
        
    </style>
</head>
<body>
    <header  style="position: fixed; width: 100%; z-index: 1;background: linear-gradient(45deg,#5667dd,#5ecbf7);">
        <div class="container-fluid">
          <div class="row  text-white">
              <div class="col-md-11 col-9 p-3 pl-5">
               <H2>All Books</H2>
              </div>
              <div class="col-md-1 col-3 p-3 pl-5">
              <a href="admin.php"class="btn btn-light">Back</a>
              </div>
              </div>
              </div>


              </header>
              <div class="conatiner-fluid ">
        <section class="col-md-12 ">
            <div class="row   pl-4 align-items-center">

                <div class="col-md-3 mt-3 ">
                <div class="card" style="width: 15rem; height: 15rem; margin-top: 8rem;">
  <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfnxJMXudt3P4Hi4aQ1xwxOhrP-MFOMzlMyw&usqp=CAU" alt="Card image cap">
  <div class="card-body">
  <h2 class="bold">FANTASY</h2>
  <a href="genre-pages/fantasy.php" class="btn btn-success">MANAGE</a>
  </div>
  </div>
  </div>



  <div class="col-md-3 mt-3 ">
                <div class="card" style="width: 15rem; height: 15rem; margin-top: 8rem;">
  <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQc9y7BBtjGXfE2TF-veoySV_nR1bYdJ69l5g&usqp=CAU" alt="Card image cap">
  <div class="card-body">
  <h2 class="bold">THRILLER</h2>
  <a href="genre-pages/thriller.php" class="btn btn-success">MANAGE</a>
  </div>
  </div>
  </div>

  <div class="col-md-3 mt-3 ">
                <div class="card" style="width: 15rem; height: 15rem; margin-top: 8rem;">
  <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTStWjf04hbKaTQC0nrPcuOl681HAI8RaKH2A&usqp=CAU" alt="Card image cap">
  <div class="card-body">
  <h2 class="bold">COMICS</h2>
  <a href="genre-pages/comic.php" class="btn btn-success">MANAGE</a>
  </div>
  </div>
  </div>


  <div class="col-md-3 mt-3 ">
                <div class="card" style="width: 15rem; height: 15rem; margin-top: 8rem;">
  <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2NsVPC0srowmD96JhSz3E8UXtKRafvweG7Q&usqp=CAU" alt="Card image cap">
  <div class="card-body">
  <h2 class="bold">FICTION</h2>
  <a href="genre-pages/fiction.php" class="btn btn-success">MANAGE</a>
  </div>
  </div>
  </div>

                          <div class="col-md-3 mt-3 ">
                <div class="card" style="width: 15rem; height: 15rem; margin-top: 8rem;">
  <img class="card-img-top" src="data:image/jpeg;base64,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" alt="Card image cap">
  <div class="card-body">
  <h2 class="bold">HORROR</h2>
  <a href="genre-pages/horror.php" class="btn btn-success">MANAGE</a>
  </div>
  </div>
  </div>

  <div class="col-md-3  mt-3">
                <div class="card" style="width: 15rem; height: 15rem; margin-top: 8rem;">
  <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqkj0B-pKQJJeVSjopCmL1zXqmePaVuzBiRQ&usqp=CAU" alt="Card image cap">
  <div class="card-body">
  <h2 class="bold">ACTION</h2>
    <a href="genre-pages/action.php" class="btn btn-success">MANAGE</a>
  </div>
  </div>
  </div>

                         
</div>
</section>
</div>

<footer class=" mt-4" style=" background:linear-gradient(45deg,
#b91eda,
#a02ae0,
#8234e5,
#5d3be8,
#c012eb    

);">
  <div class="container-fluid"></div>
    <div class="row">
      <div class="col-md-12 text-center text-white">
        <h6>Follow Me Here</h6>
        <h3>
          <a href="https://www.linkedin.com/in/amalash-k-b0a4651a9/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          <a href="https://github.com/amalash123"><i class="fa fa-github" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com/a.m.a.l.a.s.h/"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>

        
        </h3>



      </div>
    </div>
  </div>


</footer>


