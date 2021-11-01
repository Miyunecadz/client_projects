<?php
    include_once 'header.php';
?>

<div id="login">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-10 col-md-5 p-4 rounded shadow" id="div_container">
                <div id="div_alert">
                </div>
                <form action="/api/login_request.php" method="post" id="login_form">
                    <h4 class="text-center">Login User</h4>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="user_name" id="user_name" class="form-control">
                    </div>
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

                    <div class="form-group d-grid mt-3 gap-2">
                        <button type="submit" class="btn btn-primary">Login</button>
                        <a href="/register.php" id="register_link" class="btn btn-primary">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="/js/login.js" type="module"></script>
<!-- <script>
    login_form.addEventListener('submit', async(e)=>{
        e.preventDefault()
        let pattern = createPattern()
        let username = user_name.value
        let url = login_form.action
        let formData = new FormData()
        formData.append('username', username)
        formData.append('pattern', pattern)

        let response = await fetch(url,{
            method: 'POST',
            body: formData
        })
        response = await response.json()
        if(response.status == true){

        }else{
            div_alert.innerHTML = `<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Error:</strong> ${response.error}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>`
        }
    })


    function createPattern(){
        let check1 = pattern1.checked ? 1 : 0
        let check2 = pattern2.checked ? 1 : 0
        let check3 = pattern3.checked ? 1 : 0
        let check4 = pattern4.checked ? 1 : 0
        let check5 = pattern5.checked ? 1 : 0
        let check6 = pattern6.checked ? 1 : 0
        let check7 = pattern7.checked ? 1 : 0
        let check8 = pattern8.checked ? 1 : 0
        let check9 = pattern9.checked ? 1 : 0
        let check10 = pattern10.checked ? 1 : 0
        let check11 = pattern11.checked ? 1 : 0
        let check12 = pattern12.checked ? 1 : 0
        let check13 = pattern13.checked ? 1 : 0
        let check14 = pattern14.checked ? 1 : 0
        let check15 = pattern15.checked ? 1 : 0
        let check16 = pattern16.checked ? 1 : 0

        return `${check1}-${check2}-${check3}-${check4}-${check5}-${check6}-${check7}-${check8}-${check9}-${check10}-${check11}-${check12}-${check13}-${check14}-${check15}-${check16}`
    }
</script> -->