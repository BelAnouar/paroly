<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="/MaymaBeats/public/assets/admin.css?v=<?php echo time(); ?>">
  <title>Artiste</title>
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar -->
    <aside id="sidebar">
      <div class="h-100">
        <div class="sidebar-logo " style="margin-top: -9%;">
          <img src="vecteezy-music-writer-with-feather-and-g-clef-logo-1-658cba5074038115508023-removebg-preview.png" alt="" style="width: 65%; margin-left: -20%; ">
          <a href="#" style="margin-left: -15%;">MaymaBeats</a>
        </div>
        <!-- Sidebar Navigation -->
        <ul class="sidebar-nav">
          <li class="sidebar-item">
            <a href="admin" class="sidebar-link">
              <i class="fa-solid fa-home p-2 "></i>
              Home
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin-c" class="sidebar-link">
              <i class="fa-solid fa-compact-disc p-2 "></i>
              Clients
            </a>
          </li>

          <li class="sidebar-item">
            <a href="admin-a" class="sidebar-link">
              <i class="fa-regular fa-user p-2 "></i>
              Artists
            </a>
          </li>
          <li class="sidebar-item">
            <a href="adminNot" class="sidebar-link">
              <i class="fa-regular fa-user p-2 "></i>
              Notifications
            </a>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link">
              <i class="fa-solid fa-right-from-bracket p-2 "></i>
              Logout
            </a>
          </li>

        </ul>
      </div>
    </aside>
    <div class="main">
      <nav class="navbar navbar-expand px-3 border-bottom">
        <button class="btn" type="button" data-bs-theme="dark">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="d-flex">
          <input type="search" id="form1" class="form-control " placeholder="Search">
          <button type="button" class="btn btn-dark" style=" background-color: #320f48; " data-mdb-ripple-init>
            <i class="fas fa-search"></i>
          </button>
        </form>
      </nav>

      <section class="content px-3 py-2">
        <div class="container-fluid">
          <div class="mb-3">
            <section class="ml-60 pt-16 max-h-screen overflow-auto">
              <div id="plan"></div>
              <div class="px-6 py-8">
                <div class="max-w-4xl mx-auto">
                  <div class="backdrop-blur-3xl rounded-3xl border-[#BC6FF1] border-2 p-8 mb-5">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h1 class="mx-5 text-white mt-3 fw-bold">ALBUMS</h1>
                      </div>
                      <div class="container justify-content-end d-flex ">
                        <button id="openModal" class="btn add mt-3" type="button" data-bs-toggle="modal" data-bs-target="#myModal">ADD NEW STYLE
                          <svg xmlns="http://www.w3.org/2000/svg" height="24" fill="white" viewBox="0 -960 960 960" width="24">
                            <path d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                          </svg>
                        </button>

                        <div class="modal" id="myModal">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <div class="modal-header">
                                <h4 class="modal-title">Create New Album</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                              </div>

                              <div class="modal-body">
                                <form action="" method="post">
                                  <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Type Article title" name="title">
                                  </div>
                                  <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                  </div>

                                  <div class="mb-3">
                                    <label for="description" class="form-label">Album Description</label>
                                    <textarea class="form-control" id="description" placeholder="Write article description here" name="description"></textarea>
                                  </div>
                                  <button type="submit" name="insert" class="btn text-white " style="background-color: #320f48;">ADD NEW STYLE</button>
                                </form>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>

                      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-eAq1o24KdHuwmHg9F5n3pX56K1Fmksz/5m6ZsETQPKFfFlvHkUm6q1ahFnh2LJZ6" crossorigin="anonymous"></script>
                    </div>


                    <hr class="my-10">
                    <section class="content-wrap col-12">


                      <div class="content col-12">
                        <section class="info-boxes ">
                          <div class="info-box">
                            <div class="box-icon ">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M21 20V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1zm-2-1H5V5h14v14z" />
                                <path d="M10.381 12.309l3.172 1.586a1 1 0 0 0 1.305-.38l3-5-1.715-1.029-2.523 4.206-3.172-1.586a1.002 1.002 0 0 0-1.305.38l-3 5 1.715 1.029 2.523-4.206z" />
                              </svg>
                            </div>

                            <div class="box-content col-10">
                              <span class="big">44.51</span>
                              CLINETS
                            </div>
                          </div>

                          <div class="info-box">
                            <div class="box-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M20 10H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V11a1 1 0 0 0-1-1zm-1 10H5v-8h14v8zM5 6h14v2H5zM7 2h10v2H7z" />
                              </svg>
                            </div>

                            <div class="box-content col-10">
                              <span class="big">132</span>
                              ARTISTS
                            </div>
                          </div>

                          <div class="info-box active">
                            <div class="box-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M3,21c0,0.553,0.448,1,1,1h16c0.553,0,1-0.447,1-1v-1c0-3.714-2.261-6.907-5.478-8.281C16.729,10.709,17.5,9.193,17.5,7.5 C17.5,4.468,15.032,2,12,2C8.967,2,6.5,4.468,6.5,7.5c0,1.693,0.771,3.209,1.978,4.219C5.261,13.093,3,16.287,3,20V21z M8.5,7.5 C8.5,5.57,10.07,4,12,4s3.5,1.57,3.5,3.5S13.93,11,12,11S8.5,9.43,8.5,7.5z M12,13c3.859,0,7,3.141,7,7H5C5,16.141,8.14,13,12,13z" />
                              </svg>
                            </div>

                            <div class="box-content col-10">
                              <span class="big">18</span>
                              ALBUMS
                            </div>
                          </div>

                          <div class="info-box">
                            <div class="box-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M12 3C6.486 3 2 6.364 2 10.5c0 2.742 1.982 5.354 5 6.678V21a.999.999 0 0 0 1.707.707l3.714-3.714C17.74 17.827 22 14.529 22 10.5 22 6.364 17.514 3 12 3zm0 13a.996.996 0 0 0-.707.293L9 18.586V16.5a1 1 0 0 0-.663-.941C5.743 14.629 4 12.596 4 10.5 4 7.468 7.589 5 12 5s8 2.468 8 5.5-3.589 5.5-8 5.5z" />
                              </svg>
                            </div>

                            <div class="box-content col-10">
                              <span class="big">24</span>
                              SONGS
                            </div>
                          </div>
                        </section>

                      </div>


                  </div>

                </div>
            </section>
          </div>
        </div>
        <canvas id="myChart"></canvas>
      </section>
    </div>

  </div>





  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script>
    const toggler = document.querySelector(".btn");
    toggler.addEventListener("click", function() {
      document.querySelector("#sidebar").classList.toggle("collapsed");
    });
  </script>

</body>

</html>