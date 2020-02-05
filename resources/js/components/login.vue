<template>
    <div class="container">
        <div class="loginForm text-center position-absolute m-auto">
            <div class="row">
                <div class="col-md-6 col-12 logoDiv">
                    <h3 class="mt-5 pt-5">Lorem ipsum</h3>
                    <p class="p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at beatae consectetur dicta,
                        dolore enim excepturi fuga impedit, minima
                    </p>
                    <h5 class="mt-5">Lorem ipsum</h5>
                </div>
                <div class="col-md-6 col-12">
                    <div class="container formDiv">
                        <form>
                            <div class="userIcon input-group mb-4">
                                <span class="fa fa-user-circle"></span>
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <div class="input-group-text iconSq"><span class="fa fa-user"></span></div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <div class="input-group-text iconSq"><span class="fa fa-lock"></span></div>
                                </div>
                                <input type="password" class="form-control" id="inlineFormInputGroup2" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
    .loginForm {
        width: 750px;
        height: 450px;
        background-color: white;
        box-shadow: 0px 0px 20px 14px rgba(0,0,0,0.1);
        border-radius: 20px;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        overflow: hidden;
    }
    .logoDiv {
        width: 100%;
        height: 72vh;
        background-color: blue;
    }

    .formDiv {
        text-align: center;
        margin-top: 20%;
        padding-right: 35px;
    }
    .btn {
        float: right;
    }
    .iconSq {
        width: 38px;
    }
    .userIcon {
        width: 100%;
        text-align: center;
    }
    .userIcon span {
        font-size: 100px !important;
        width: 100%;
        color: darkgray;
    }
    div span {
        font-size: 20px !important;
    }
    .form-control {
        font-size: 20px;
    }
    .btn-block {
        background-color: #54cc03 !important;
        border-color: #54cc03 !important;
        box-shadow: none !important;
        height: 40px;
    }
    .btn-block:hover {
        background-color: #51bb0a !important;
    }

</style>
