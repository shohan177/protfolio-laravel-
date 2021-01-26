

(function($){
    $(document).ready(function(){
        getAllSkill()

        setTimeout(function() {
            $('#notification').fadeOut("slow")
        }, 5000);


    })
    // submit slider form slider-form
    $(document).on('click','#slider_submit',function(e){
        e.preventDefault()
        $('form#slider-form').submit()
    })
    //logout form
    $(document).on('click','#logout_button',function(e){
        e.preventDefault()
        $('form#logout-form').submit()
    })
    // show add skill modal
    $(document).on('click','a#add_skill_btn',function(e){
        e.preventDefault()
        $('#add_skill').modal('show');
    })
    // show add service modal
    $(document).on('click','a#add_service_btn',function(e){
        e.preventDefault()
        $('#add_service').modal('show');
    })
    // get all skill
    function getAllSkill(){
        $.ajax({
            url: "/all-skill",
            method:"GET",
            success: function(data){
                $("tbody#skill_body").html(data)
            }
        })
    }


    // data sent to skill modal

    $(document).on('submit','form#skill_form',function(e){
        e.preventDefault()

        $.ajax({
            url: "/skill",
            data: new FormData(this),
            method: "POST",
            processData: false,
            contentType:false,
            success: function(data){
                getAllSkill()
                $('form#skill_form')[0].reset()
                $('#add_skill').modal('hide');

            }
        })

    })

    //edit skill
    $(document).on('click','a#skill_edit',function(e){
        e.preventDefault()

        $skill_id = $(this).attr('skill_edit_id')
        alert( $skill_id);
    })
    //delete skill
    $(document).on('click','#skill_delete',function(e){
        e.preventDefault()
        $del_id = $(this).attr('skill_delete_id')

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                  confirmButton: 'btn btn-success',
                  cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
              })

              swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
              }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/skill-delete/' +$del_id,
                        success: function(data){
                            getAllSkill()
                        }
                    })
                }

              })

    })
    //add socal link fild
    $(document).on('click','#add_socal_link',function(e){
        e.preventDefault()
        let rend_id = Math.floor(Math.random() * 10000)
        $('#link-container').append(' <tr  id="div_'+rend_id+'"> \n'+
'        <td><input type="text" class="form-control input-rounded border-warning" name="logo[]" placeholder="logo"></td>\n'+
'        <td><input type="text" class="form-control input-rounded border-warning" name="name[]" placeholder="Name"></td>\n'+
'        <td><input type="text" class="form-control input-rounded border-warning" name="url[]" placeholder="url"></td>\n'+
'        <td><input type="hidden" name="id[]" value="'+rend_id+'"></td>\n'+
'        <td><div class="d-flex">\n' +
'        <a href="" link_id="'+rend_id+'" class="del btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a></div></td>\n'+
'    </tr>')
    })

    // remove fild
    $(document).on('click','.del',function(e){
        e.preventDefault()
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: 'btn btn-success',
              cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
          })

          swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
          }).then((result) => {
            if (result.isConfirmed) {
                let id = $(this).attr('link_id')
                $('#div_'+id).remove()
            }

          })




    })

    //add moto
    $(document).on('click','#add_moto',function(e){
        e.preventDefault()
        let rend_id = Math.floor(Math.random() * 10000)
        $('#moto-container').append('<div id="div_'+rend_id+'" class="row">\n' +
'        <div class="col-sm-8">\n' +
'            <div class="form-group input-warning">\n' +
'               <input type="text" class="form-control input-rounded" name="moto[]" placeholder="moto">\n' +
'               <input type="hidden" name="moto_id[]" value="'+rend_id+'">\n'+
'            </div>\n' +
'        </div>\n' +
'        <div class="col-sm-4 mt-2">\n' +
'            <a href="" link_id="'+rend_id+'" class="del btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a> \n' +
'        </div>\n' +
'    </div>')

    })
    //add E
    $(document).on('click','.add_accordion', function(e){
        e.preventDefault()
        let continer = $(this).attr('div')
        let rend_id = Math.floor(Math.random() * 10000)
        $('#'+continer).append('<div id="accordion-'+rend_id+'" class="accordion shadow accordion-rounded">\n' +
            '                            <div class="accordion__item">\n' +
            '                                <div class="accordion__header rounded-lg collapsed" data-toggle="collapse" data-target="#default_'+rend_id+'" aria-expanded="false">\n' +
            '                                    <span class="accordion__header--text">container #'+rend_id+'</span>\n' +
            '                                    <button id="" style="margin-right: 30px" remove_id="accordion-'+rend_id+'" class="close close-item">&times;</button>\n' +
            '                                    <span class="accordion__header--indicator"></span>\n' +
            '                                </div>\n' +
            '                                <div id="default_'+rend_id+'" class="accordion__body collapse" data-parent="#accordion-'+rend_id+'" style="">\n' +
            '                                    <div class="accordion__body--text bg-light">\n' +
            '                                        <div class="form-row input-info ">\n' +
            '                                            <div class="col-sm-7">\n' +
            '                                                <input type="text" class="form-control input-rounded" name="'+continer+'_name[]" placeholder="Degree name">\n' +
            '                                                <input type="hidden" value="'+rend_id+'"  name="'+continer+'_id[]">\n' +
            '                                                <input type="hidden" value="'+continer+'"  name="'+continer+'_div[]">\n' +

            '                                            </div>\n' +
            '                                            <div class="col mt-2 mt-sm-0">\n' +
            '                                                <input type="text" class="form-control input-rounded" name="'+continer+'_start[]" placeholder="Start">\n' +
            '                                            </div>\n' +
            '                                            <div class="col mt-2 mt-sm-0">\n' +
            '                                                <input type="text" class="form-control input-rounded" name="'+continer+'_end[]" placeholder="End">\n' +
            '                                            </div>\n' +
            '                                        </div>\n' +
            '                                        <div class="form-row input-info  mt-3">\n' +
            '                                            <div class="col mt-2 mt-sm-0">\n' +
            '                                                <textarea name="'+continer+'_about_text[]" style="border-radius: 10px;"  class="form-control" placeholder="Course Details" rows="4"></textarea>\n' +
            '                                            </div>\n' +
            '                                        </div>\n' +
            '                                    </div>\n' +
            '                                </div>\n' +
            '                            </div>\n' +
            '                        </div>')
    })

    //sevice add
    $(document).on('click','#add_service',function (e){
        e.preventDefault()

        let rend_id = Math.floor(Math.random() * 10000)

        $("#service_container").append('<div id="accordion-'+rend_id+'" class="accordion accordion-danger-solid">\n' +
        '                        <div class="accordion__item">\n' +
        '                            <div class="accordion__header rounded-lg collapsed" data-toggle="collapse" data-target="#default_'+rend_id+'" aria-expanded="false">\n' +
        '                                <span class="accordion__header--text">service #'+rend_id+'</span>\n' +
        '                                <button id="" style="margin-right: 30px" remove_id="accordion-'+rend_id+'" class="close close-item">&times;</button>\n' +
        '                                <span class="accordion__header--indicator"></span>\n' +
        '                            </div>\n' +
        '                            <div id="default_'+rend_id+'" class="accordion__body collapse" data-parent="#accordion-'+rend_id+'" style="">\n' +
        '                                <div class="accordion__body--text">\n' +
        '                                    <div class="form-row input-info ">\n' +
        '                                        <div class="col-sm-5">\n' +
        '                                            <input type="text" name="name[]" class="form-control input-rounded" placeholder="Service name">\n' +
        '                                        </div>\n' +
        '                                        <div class="col-sm-2">\n' +
        '                                            <input type="color" class="form-control input-rounded" id="favcolor" name="color[]" value="#ff0000">\n' +
        '                                        </div>\n' +
        '                                        <div class="col mt-5 mt-sm-0 ml-lg-2">\n' +
        '                                            <label for="logo_input_'+rend_id+'"><img id="'+rend_id+'" style="cursor: pointer; border-radius: 5px;" src="/media/logo/camera.png" class="w-75 h-50" alt=""></label>\n' +
        '                                            <input name="logo[]" id="logo_input_'+rend_id+'"  class="upload_image" code="'+rend_id+'"  type="file"  style="display: none">\n' +
        '                                            <input name="old_logo[]" value="" type="text" style="display: none">\n' +
        '                                            <input name="r_id[]" value="'+rend_id+'" type="text" style="display: none">\n' +
        '                                            <input  type=\'text\' id="new_'+rend_id+'" name="new_logo[]" value="0" style="display: none">\n' +
        '                                        </div>\n' +
        '                                    </div>\n' +
        '                                    <div class="form-row input-info  mt-3">\n' +
        '                                        <div class="col mt-2 mt-sm-0">\n' +
        '                                            <textarea name="about_text[]" style="border-radius: 10px;"  class="form-control" placeholder="Service Details" rows="3"></textarea>\n' +
        '                                        </div>\n' +
        '                                    </div>\n' +
        '                                </div>\n' +
        '                            </div>\n' +
        '                        </div>')

    })

    //close accuordiamn
    $(document).on('click','.close-item',function(e){
        e.preventDefault()
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: 'btn btn-success',
              cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
          })

          swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
          }).then((result) => {
            if (result.isConfirmed) {
                let div_id = $(this).attr('remove_id')
                $('#'+div_id).remove()
            }

          })


    })

    // uplode photo view
    $(document).on('change','input.upload_image',function(e){
        e.preventDefault()
        let id = $(this).attr('code')

        let product_photo = URL.createObjectURL(e.target.files[0])

        $("#new_"+id).attr('value',1)
        $('#'+id).attr('src',product_photo)
    });
    //submit experiance form
    $(document).on('click','#experiance_submit',function(e){
        e.preventDefault()
        $('form#experiance-form').submit()
    })
    //submit form
    $(document).on('click','#form_submit_service',function(e){
        e.preventDefault()
        $('form#service_form').submit()
    })

    //reset color
    $(document).on('click','#reset_color',function(e){
        e.preventDefault()

        $('form#slider-form input[name="color_top"]').val('255, 0, 0, 0.521')
        $('form#slider-form input[name="color_bottom"]').val('5, 10, 90, 0.699')
    })

})(jQuery)



