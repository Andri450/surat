$(document).ready(function(){ 

    $('#sembunyikan_pass').change(function(){
        if(this.checked){
            $('#pass').prop('type','password');
        }else{
            $('#pass').prop('type','text');
        }
    });

    $('#login').submit(function(e){
        e.preventDefault();
        
        var uname = $('#uname').val();
        var pass  = $('#pass').val();
        if ( uname == "" && pass == "" ) {
            $('#notif_uname').text('Username Belum Terdaftar');
            $('#notif_pass').text('Password Harus Diisi');
            $('#notif_uname').show('slow');
            $('#notif_pass').show('slow');
            Swal.fire(
                'Lengkapi Data',
                'Lengkapi Username Dan Password Anda',
                'question'
            )
        }else{

            if (uname == "" && pass != "") {
                $('#notif_uname').text('Username Harus Diisi');
                $('#notif_uname').show('slow');
                $('#notif_pass').hide('slow');
                Swal.fire(
                    'Lengkapi Data',
                    'Lengkapi Username Anda',
                    'question'
                )
            }else if (uname != "" && pass == "") {
                $('#notif_pass').text('Password Harus Diisi');
                $('#notif_pass').show('slow');
                $('#notif_uname').hide('slow');
                Swal.fire(
                    'Lengkapi Data',
                    'Lengkapi Password Anda',
                    'question'
                )
            }else{

                var data = $(this).serialize();
                var action = $(this).attr('action');
                $.ajax({
                    url: action,
                    data: data,
                    crossDomain: true,
                    method: 'POST',
                    beforeSend: function(){
                        $('#notif_uname').hide('slow');
                        $('#notif_pass').hide('slow');
                        $('#masukbtn').text('Loading...');
                        $('#masukbtn').prop('disabled', true);
                    },
                    success: function(respon){
                        
                        console.log(respon);

                        if (respon.status == "success") {

                            var dat = respon.isi;
                
                            $.ajax({
                                url: 'cek',
                                data: {
                                    datas: dat
                                },
                                method: 'POST',
                                success: function(ress){
                                    Swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: 'Selamat Datang '+ress,
                                        showConfirmButton: false,
                                        timer: 1500
                                    })
                                    setInterval(function(){
                                        window.location.replace('index');
                                    },1500);
                                    console.log(ress);
                                },
                                error: (e) => {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Oops...',
                                        text: 'Error: Silahkan Ulangi Login'+ ' !'
                                    });
                                }
                            });

                        }else if (respon.status == "username_not_found") {
                            Swal.fire(
                                'Username salah?',
                                'Username Anda Salah/Belum Terdaftar?',
                                'question'
                            )    
                            $('#notif_uname').text('Username Belum Terdaftar');
                            $('#notif_uname').show('slow');
                            $('#masukbtn').show('slow');
                            $('#masukbtn').text('Masuk');
                            $('#masukbtn').prop('disabled', false);
                        }else if (respon.status == "password_not_found") {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Password Anda Salah'
                            });
                            $('#notif_pass').text('Password Anda Salah');
                            $('#notif_pass').show('slow');
                            $('#masukbtn').show('slow');
                            $('#masukbtn').prop('disabled', false);
                            $('#masukbtn').text('Masuk');
                        }

                        $('#masukbtn').text('Masuk');
                        $('#masukbtn').prop('disabled', false);

                    },
                    error: (e) => {
                        
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Message: ' + e.status + ' '+ e.responseJSON.status +' !'
                        });

                        if (e.responseJSON.status == "username_not_found") {
                            $('#notif_uname').text('Username Belum Terdaftar');
                            $('#notif_uname').show('slow');
                        }else if (e.responseJSON.status == "password_not_found") {
                            $('#notif_pass').text('Password Anda Salah');
                            $('#notif_pass').show('slow');
                        }

                        $('#masukbtn').text('Masuk');
                        $('#masukbtn').prop('disabled', false);
                    }
                });

            }

        }

    });

});