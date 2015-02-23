 <?php 
                    $idProducto_destacado= isset($update_data["idProducto_destacado"]) ? $update_data["idProducto_destacado"] : "";
                    $descripcion= isset($update_data["descripcion"]) ? $update_data["descripcion"] : "";
                    $fecha_inicio= isset($update_data["fecha_inicio"]) ? $update_data["fecha_inicio"] : "";
                    $fecha_fin= isset($update_data["fecha_fin"]) ? $update_data["fecha_fin"] : "";
                    $idProducto= isset($update_data["idProducto"]) ? $update_data["idProducto"] : "";

$btn_msg = ($id == 0) ? "ADD" : " Update";
$title_msg = ($id == 0) ? "Create" : " Update";
?>


<script type="text/javascript" >
    $(document).ready(function() {

        $('#productodestacado').validationEngine('attach', {scroll: false, addFailureCssClassToField: 'inputbox-error'});
    });
</script>


<div class="row">
<div class="col-lg-12">


             <h3 class="text-muted"><?php echo $title_msg; ?> Producto destacado</h3> 
                


                                <div id="smessage">
                                    <?php echo validation_errors();
                                           echo $this->session->flashdata('smessage');
                                    ?>

                                </div>



                                <form action="" method="post"  class="form-group"  name="productodestacado" id="productodestacado">
                                    <?php
                                    if ($id != 0) {
                                        echo '<input name="id" id="id" type="hidden" value="' . $id . '" />';
                                    }
                                    ?>   <div class="col-lg-4">  
                                    <label>Descripcion*</label>
                                    <div class="field">

                                        <input name="descripcion" id="descripcion" type="text"  class="xxwide text input validate[required] form-control" placeholder="Descripcion" value="<?php echo $descripcion; ?>" />

 
                                    </div>
                             </div>   <div class="col-lg-4">  
                                    <label>Fecha inicio*</label>
                                    <div class="field">

                                        <input name="fecha_inicio" id="fecha_inicio" type="text"  class="xxwide text input validate[required] form-control" placeholder="Fecha inicio" value="<?php echo $fecha_inicio; ?>" />

 
                                    </div>
                             </div>   <div class="col-lg-4">  
                                    <label>Fecha fin*</label>
                                    <div class="field">

                                        <input name="fecha_fin" id="fecha_fin" type="text"  class="xxwide text input validate[required] form-control" placeholder="Fecha fin" value="<?php echo $fecha_fin; ?>" />

 
                                    </div>
                             </div>   <div class="col-lg-4">  
                                    <label>IdProducto*</label>
                                    <div class="field">

                                        <input name="idProducto" id="idProducto" type="text"  class="xxwide text input validate[required] form-control" placeholder="IdProducto" value="<?php echo $idProducto; ?>" />

 
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

        var valid = jQuery('#productodestacado').validationEngine('validate');
        

        if (valid == false) {
            return false;

        }
        $.ajax({
            type: "post",
            url: base_url + "/productodestacado/process_form",
            cache: false,
            data: $('#productodestacado').serialize(),
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
                        window.location = base_url + '/productodestacado';
                    }
                } else {
                    if (is_redirect == true) {
                        window.location = base_url + '/productodestacado';
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
        $('#productodestacado').submit(save_data);
      


    });


</script>


