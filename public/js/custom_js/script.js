

(function($){
    $(document).ready(function(){
        getAllSkill()

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
    //add socal link fild
    $(document).on('click','#add_socal_link',function(e){
        e.preventDefault()
        let rend_id = Math.floor(Math.random() * 10000)
        $('#link-container').append(' <tr id="div_'+rend_id+'"> \n'+
'        <td><input type="text" class="form-control input-rounded border-info" name="logo[]" placeholder="logo"></td>\n'+
'        <td><input type="text" class="form-control input-rounded border-info" name="name[]" placeholder="Name"></td>\n'+
'        <td><input type="text" class="form-control input-rounded border-info" name="url[]" placeholder="url"></td>\n'+
'        <td><div class="d-flex">\n' +
'        <a href="" link_id="'+rend_id+'" class="del btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a></div></td>\n'+
'    </tr>')
    })

    // remove fild
    $(document).on('click','.del',function(e){
        e.preventDefault()
        let id = $(this).attr('link_id')
        $('#div_'+id).remove()
    })

    //add moto
    $(document).on('click','#add_moto',function(e){
        e.preventDefault()
        let rend_id = Math.floor(Math.random() * 10000)
        $('#moto-container').append('<div id="div_'+rend_id+'" class="row">\n' +
'        <div class="col-sm-8">\n' +
'            <div class="form-group input-success">\n' +
'               <input type="text" class="form-control input-rounded" name="moto[]" placeholder="moto">\n' +
'            </div>\n' +
'        </div>\n' +
'        <div class="col-sm-4 mt-2">\n' +
'            <a href="" link_id="'+rend_id+'" class="del btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a> \n' +
'        </div>\n' +
'    </div>')

    })

// uplode photo view
$(document).on('change','input.upload_image',function(e){

    let id = $(this).attr('code')
    let product_photo = URL.createObjectURL(e.target.files[0])


    $("#"+id).attr('src',product_photo)
});

})(jQuery)
