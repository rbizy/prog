<!DOCTYPE html>
<html class="h-100">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#b1").click(function () {
                alert('Click clock');
            });
         
            $("#qweqwe").click(function () {
                $.post("/task", {data: $('form').serializeArray()}, function(data){
                    alert(data);
                    $('#exampleModalCenter').hide();
                    $('.modal-backdrop').hide();
                });
            });
        });
    </script>
</head>

<body class="h-100 d-flex flex-column">
    <div class="d-flex justify-content-between">
        <div>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="#">По мылу</a>
                    <a class="dropdown-item" href="#">По имени</a>
                    <a class="dropdown-item" href="#">По статусу</a>
                </div>
            </div>
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter">
                Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email address</label>
                                    <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Example textarea</label>
                                    <textarea name="name" class="form-control" id="exampleFormControlTextarea2"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Example textarea</label>
                                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </form>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button id="qweqwe" type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button id="b1" type="button" class="btn btn-dark">Авторизация</button>
    </div>
    <div class="d-flex flex-column" style="flex-grow: 1;">

        <div class="card m-3 text-white bg-dark" style="flex-grow: 1;">
            <div class="card-header d-flex justify-content-between">
                <div>Email</div>
                <div>
                    <div class="input-group mb-3">
                        <input type="checkbox" aria-label="Checkbox for following text input">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card m-3 text-white bg-dark" style="flex-grow: 1;">
            <div class="card-header d-flex justify-content-between">
                <div>Email</div>
                <div>
                    <div class="input-group mb-3">
                        <input type="checkbox" aria-label="Checkbox for following text input">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">Ivan Ivanov Ivanovich</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card m-3 text-white bg-dark" style="flex-grow: 1;">
            <div class="card-header d-flex justify-content-between">
                <div>Email</div>
                <div>
                    <div class="input-group mb-3">
                        <input type="checkbox" aria-label="Checkbox for following text input">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination d-flex justify-content-center">
            <li class=" page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
</body>

</html>
