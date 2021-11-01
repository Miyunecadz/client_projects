<?php

// check if session is set, if not it will redirect to login
    session_start();
    if(! $_SESSION['user']){
        header('Location: login.php');
    }

    include_once 'header.php';
?>

<div class="container">
    <div class="row justify-content-center mt-5 ">
        <div class="col-10 col-md-5 p-4 rounded shadow"  id="div_container">
            <form action="/api/update_pattern_request.php" method="post" id="update_pattern_form">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <h3 class="text-center mb-4">Update User Pattern</h4>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h6 class="text-center">New Pattern</h4>
                            <div class="mt-3">
                                <div class="form-group m-1 d-flex justify-content-center">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="pattern1" name="pattern1">
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="pattern2" name="pattern2">
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="pattern3" name="pattern3">
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="pattern4" name="pattern4">
                                    </div>
                                </div>
                                <div class="form-group m-1 d-flex justify-content-center">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="pattern5" name="pattern5">
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="pattern6" name="pattern6">
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="pattern7" name="pattern7">
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="pattern8" name="pattern8">
                                    </div>
                                </div>
                                <div class="form-group m-1  d-flex justify-content-center">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="pattern9" name="pattern9">
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="pattern10" name="pattern10">
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="pattern11" name="pattern11">
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="pattern12" name="pattern12">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-1 d-flex justify-content-center">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="pattern13" name="pattern13">
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="pattern14" name="pattern14">
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="pattern15" name="pattern15">
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="pattern16" name="pattern16">
                                </div>
                            </div>

                            <div class="form-group d-flex mt-3 gap-2 justify-content-center">
                                <a href="/" class="btn btn-primary">Back to Main Menu</a>
                            <button class="btn btn-primary" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">Next</button>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <h6 class="text-center">Confirm Pattern</h4>
                            <div class="mt-3">
                                <div class="form-group m-1 d-flex justify-content-center">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="confirm_pattern1" name="confirm_pattern1">
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="confirm_pattern2" name="confirm_pattern2">
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="confirm_pattern3" name="confirm_pattern3">
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="confirm_pattern4" name="confirm_pattern4">
                                    </div>
                                </div>
                                <div class="form-group m-1 d-flex justify-content-center">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="confirm_pattern5" name="confirm_pattern5">
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="confirm_pattern6" name="confirm_pattern6">
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="confirm_pattern7" name="confirm_pattern7">
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="confirm_pattern8" name="confirm_pattern8">
                                    </div>
                                </div>
                                <div class="form-group m-1  d-flex justify-content-center">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="confirm_pattern9" name="confirm_pattern9">
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="confirm_pattern10" name="confirm_pattern10">
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="confirm_pattern11" name="confirm_pattern11">
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="confirm_pattern12" name="confirm_pattern12">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-1 d-flex justify-content-center">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="confirm_pattern13" name="confirm_pattern13">
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="confirm_pattern14" name="confirm_pattern14">
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="confirm_pattern15" name="confirm_pattern15">
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="confirm_pattern16" name="confirm_pattern16">
                                </div>
                            </div>

                            <div class="form-group d-flex mt-3 gap-2 justify-content-center">
                                <button type="submit" class="btn btn-primary">Update Pattern</button>
                                <button class="btn btn-primary" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">Back</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
var myCarousel = document.querySelector('#carouselExampleInterval')
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 0,
  wrap: false
})
</script>
<script src="/js/update_pattern.js" defer></script>
