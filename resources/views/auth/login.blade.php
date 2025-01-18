@extends('layouts.master')
@section('title', 'Đăng nhập')
<style>
    body {
        overflow: hidden;
    }

    .background {

        background-size: cover;
        /* Đảm bảo hình ảnh phủ toàn bộ không gian */
        background-position: center top;
        /* Đẩy hình ảnh lên trên */
        background-repeat: no-repeat;
        /* Không lặp lại hình ảnh */
        width: 100vw;
        /* Chiều rộng toàn bộ màn hình */
        height: 100vh;
        /* Chiều cao toàn bộ màn hình */
        overflow: hidden;
        max-width: none;
        max-height: none;
        font-family: 'Lato', sans-serif;
    }

    .form {
        background: white;
        padding: 70 50px;
    }

    .form h2 {
        text-transform: uppercase;
        text-align: center;
        font-size: 18px;
        color: #2f1f1e;
        letter-spacing: 0.061em;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .form h2.success {
        color: #356e64;
        margin-top: -40px;
        margin-bottom: 0px;
        padding: 0;
    }

    .form p.success-dialog {
        margin-top: -150px;
        color: #356e64;
        letter-spacing: 0.02em;
        text-align: center;
        line-height: 1.8em;
        text-transform: uppercase;
    }

    .form p.success-dialog a {
        color: #9d775f;
        text-decoration: none;
        transition: 0.8s all ease;
    }

    .form p.success-dialog a:hover {
        color: #c08159;
        transition: 0.4s all ease;
    }

    .form input {
        width: 100%;
        background: #fff;
        text-align: center;
        margin-bottom: 25px;
        box-shadow: none;
        appearance: none;
        border: none;
        border-top: 1px solid #fff;
        border-left: 1px solid #fff;
        border-right: 1px solid #fff;
        border-bottom: 1px solid #ebd7cf;
        padding-top: 8px;
        padding-bottom: 8px;

        font-size: 11px;
        position: relative;
        z-index: 500;
        letter-spacing: 0.06em;
    }

    .form input:focus {
        border: 1px solid #ebd7cf;
        outline: none;
        appearance: none;
    }

    .form input:-webkit-autofill {
        -webkit-box-shadow: 0 0 0px 1000px white inset;
    }

    .form .submit {
        padding-top: 12px;
        padding-bottom: 12px;
        border: none;
        text-transform: uppercase;
        font-size: 11px;
        position: relative;
        z-index: 500;
        letter-spacing: 0.06em;
        text-align: center;
        cursor: pointer;
        background: #ec7242;
        color: #fff;
        width: 101%;
        transition: 0.8s all ease;
    }

    .form .submit:hover {
        background: #d6673c;
        transform: translateY(1px);
        transition: 0.4s all ease;
    }

    #firstname {
        margin-top: 20px;
    }

    .circle {
        padding: 15px;
        height: 25px;
        width: 25px;
        margin-top: -80px;
        margin-left: 115px;
        position: absolute;
        z-index: 20;
        border-radius: 50%;
        clear: both;
        opacity: 0.8;
    }

    .circle-quill {
        border: 1px solid #ebd7cf;
        background: #fff;
    }

    .circle-paper {
        border: 1px solid #9ac0ba;
        background: #5d978e;
    }



    .submit-under {
        background: #8c6e7a;
        width: 291px;
        height: 45px;
        margin-top: -40px;
        margin-left: -4px;
        position: absolute;
        z-index: -1;
    }

    .loader,
    .loader2 {
        position: absolute;
        z-index: -5;
        margin-top: -45px;
        margin-left: 114px;
    }
</style>

<div class="background p-0 m-0 d-flex" style="background-image: url('{{ asset('images/bg-sgu.jpg') }}');">
    <div class="form m-auto">
        <div class="input-contain">
            <h2 class="info">ERP - Quản lý kho và nhân sự</h2>

            <input type="text" id="username" name="username" placeholder="Tên đăng nhập" maxlength="100" />
            <input type="password" placeholder="Mật khẩu" name="password" id="password" />
            <div class="allsub">
                <div class="submit">Đăng nhập</div>
            </div><!--allsub-->

        </div><!--input-contain-->
    </div>
</div>

@push('scripts')
    <script>
        $(document).on('click', '.submit', function (e) {
            e.preventDefault();

            var data = {
                username: $('#username').val(),
                password: $('#password').val()  // Sửa lại thành password
            };

            $.ajax({
                type: 'POST',
                url: '{{ route('checkLogin') }}',
                data: data,
                dataType: 'json',
                success: function (data) {
                    if (data.status == 'success') {

                        window.location.href = '{{ route('index') }}';
                    } else {
                        alert('Đăng nhập thất bại!'); // Thông báo khi đăng nhập thất bại
                    }
                },
                error: function (xhr, status, error) {
                    console.log(error);
                }
            });
        });
    </script>
@endpush