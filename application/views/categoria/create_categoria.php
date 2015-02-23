 <?php 
                    $idCategoria= isset($update_data["idCategoria"]) ? $update_data["idCategoria"] : "";
                    $nombre= isset($update_data["nombre"]) ? $update_data["nombre"] : "";
                    $codigo= isset($update_data["codigo"]) ? $update_data["codigo"] : "";
                    $descripcion= isset($update_data["descripcion"]) ? $update_data["descripcion"] : "";
                    $anuncio= isset($update_data["anuncio"]) ? $update_data["anuncio"] : "";
                    $revisado= isset($update_data["revisado"]) ? $update_data["revisado"] : "";

$btn_msg = ($id == 0) ? "ADD" : " Update";
$title_msg = ($id == 0) ? "Create" : " Update";
?>


<script type="text/javascript" >
    $(document).ready(function() {

        $('#categoria').validationEngine('attach', {scroll: false, addFailureCssClassToField: 'inputbox-error'});
    });
</script>


<div class="row">
<div class="col-lg-12">


             <h3 class="text-muted"><?php echo $title_msg; ?> Categoria</h3> 
                


                                <div id="smessage">
                                    <?php echo validation_errors();
                                           echo $this->session->flashdata('smessage');
                                    ?>

                                </div>



                                <form action="" method="post"  class="form-group"  name="categoria" id="categoria">
                                    <?php
                                    if ($id != 0) {
                                        echo '<input name="id" id="id" type="hidden" value="' . $id . '" />';
                                    }
                                    ?>   <div class="col-lg-4">  
                                    <label>Nombre*</label>
                                    <div class="field">

                                        <input name="nombre" id="nombre" type="text"  class="xxwide text input validate[required] form-control" placeholder="Nombre" value="<?php echo $nombre; ?>" />

 
                                    </div>
                             </div>   <div class="col-lg-4">  
                                    <label>Codigo*</label>
                                    <div class="field">

                                        <input name="codigo" id="codigo" type="text"  class="xxwide text input validate[required] form-control" placeholder="Codigo" value="<?php echo $codigo; ?>" />

 
                                    </div>
                             </div>   <div class="col-lg-4">  
                                    <label>Descripcion*</label>
                                    <div class="field">

                                        <input name="descripcion" id="descripcion" type="text"  class="xxwide text input validate[required] form-control" placeholder="Descripcion" value="<?php echo $descripcion; ?>" />

 
                                    </div>
                             </div>   <div class="col-lg-4">  
                                    <label>Anuncio*</label>
                                    <div class="field">

                                        <input name="anuncio" id="anuncio" type="text"  class="xxwide text input validate[required] form-control" placeholder="Anuncio" value="<?php echo $anuncio; ?>" />

 
                                    </div>
                             </div>   <div class="col-lg-4">  
                                    <label>Revisado*</label>
                                    <div class="field">

                                        <input name="revisado" id="revisado" type="text"  class="xxwide text input validate[required] form-control" placeholder="Revisado" value="<?php echo $revisado; ?>" />

 
                                    </div>
                             </div>   
                                          
                                            
                                            
                                            
                                                   
                                    <div class="col-lg-2" style="padding-top: 2.2%">
                                        <input name="insured_group"
                                               id="add_insuere_group" class="btn  btn-default" value="<?php echo $btn_msg ?>" type="submit" />
                                    </div>
                                   
                                            
                                    

                                   
                                </form>




    </div>
</div>  <script>


    function save_data(e) {
        e.stopPropagation();
        e.preventDefault();
        var thisdata = $(e.target);

        var valid = jQuery('#categoria').validationEngine('validate');
        

        if (valid == false) {
            return false;

        }
        $.ajax({
            type: "post",
            url: base_url + "/categoria/process_form",
            cache: false,
            data: $('#categoria').serialize(),
            success: function(json) {
                var obj = jQuery.parseJSON(json);
                var status = obj['is_error'];
                var is_redirect = obj['is_redirect'];
                var error_count = obj['error_count'];

                if (status == false) {

            		
                    $('form input:text,form textarea').val('');

                    $('#smessage').html(obj['data']);
                    $('#smessage').addClass("secondary").removeClass('danger');
                    $('#smessage').show();
                    if (is_redirect == true) {
                        window.location = base_url + '/categoria';
                    }
                } else {
                    if (is_redirect == true) {
                        window.location = base_url + '/categoria';
                    }
                    if (error_count != 0) {
                        $("#smessage").html("There are " + error_count + "  errors.please fix all");
                    } else {
                        $("#smessage").html("");
                    }
                    $("#smessage").append(obj["data"]);
                    $("#smessage").addClass("danger").removeClass("secondary");
                    $("#smessage").show();
                }
            },
            error: function() {
                alert("Something Went wrong...");
            }
        });


    }


    $(document).ready(function() {
        $("#smessage").hide();
        $('#categoria').submit(save_data);
      


    });


</script>


