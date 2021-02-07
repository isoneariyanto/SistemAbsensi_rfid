    // modal  edit employee
    $(document).on("click", "#edit_employee", function(){
        var id_employee = $(this).data('id');
        var id_user = $(this).data('iduser');
        var username = $(this).data('username');
        var password = $(this).data('password');
        var first_name = $(this).data('firstname');
        var last_name = $(this).data('lastname');
        var email = $(this).data('email');
        var placeofbirth = $(this).data('placeofbirth');
        var dateofbirth = $(this).data('dateofbirth');
        var address = $(this).data('address');
        var company = $(this).data('company');
        var job = $(this).data('job');
        var level = $(this).data('level');
        $(".modal-body #id_employee").val(id_employee);
        $(".modal-body #id_user").val(id_user);
        $(".form-group #username").val(username);
        $(".form-group #password").val(password);
        $(".form-group #first_name").val(first_name);
        $(".form-group #last_name").val(last_name);
        $(".form-group #email").val(email);
        $(".form-group #placeofbirth").val(placeofbirth);
        $(".form-group #dateofbirth").val(dateofbirth);
        $(".form-group #address").val(address);
        $(".form-group #company").val(company);
        $(".form-group #job").val(job);
        $(".form-group #level").val(level);
    });

    // modal  drop employee
    $(document).on("click", "#drop_employee", function(){
        var id_employee = $(this).data('id');
        var usr_id = $(this).data('user');
        $("#id_employee").val(id_employee);
        $("#userId").val(usr_id);
    });






