

(function($){
    $(document).ready(function(){
        getAllSkill()

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

})(jQuery)
