<?php

/* carro/detalle_envio_carro.twig */
class __TwigTemplate_cb56286d8cd23bfa57fe8bdd4c468a9bb4aad9da20d8a722d9f366bca2c74207 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_templates/base.twig");

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_templates/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_contenido($context, array $blocks = array())
    {
        // line 2
        echo "
<div class=\"col-md-12\">
\t<div class=\"row\">
\t\t<h3>Datos envío y facturación</h3>
\t\t<hr />
\t\t";
        // line 7
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "form_direccion", array());
        echo "
\t\t<div
\t\t\tclass=\"form-group ";
        // line 9
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"nombre\" class=\"col-sm-2 control-label\">Nombre</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"nombre\" id=\"nombre\"
\t\t\t\t\tvalue=\"";
        // line 13
        echo twig_escape_filter($this->env, set_value("nombre"), "html", null, true);
        echo "\"> <span>";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array());
        echo "</span>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"form-group ";
        // line 17
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"apellidos\" class=\"col-sm-2 control-label\">Apellidos</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"apellidos\"
\t\t\t\t\tid=\"apellidos\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, set_value("apellidos"), "html", null, true);
        echo "\"> <span>";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array());
        // line 22
        echo "</span>
\t\t\t</div>
\t\t</div>

\t\t<div
\t\t\tclass=\"form-group ";
        // line 27
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dni", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"dni\" class=\"col-sm-2 control-label\">DNI</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"dni\" id=\"dni\"
\t\t\t\t\tvalue=\"";
        // line 31
        echo twig_escape_filter($this->env, set_value("dni"), "html", null, true);
        echo "\"> <span>";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dni", array());
        echo "</span>
\t\t\t</div>
\t\t</div>

\t\t<div
\t\t\tclass=\"form-group ";
        // line 36
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direccion", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"direccion\" class=\"col-sm-2 control-label\">Dirección</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"direccion\"
\t\t\t\t\tid=\"direccion\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, set_value("direccion"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group \">
\t\t\t<label for=\"provincia\" class=\"col-sm-2 control-label\">Provincia</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select class=\"form-control\" name=\"provincia\" id=\"provincia\"> ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["provincias"]) ? $context["provincias"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["provincia"]) {
            // line 49
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["provincia"], "idProvincia", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["provincia"], "nombre", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provincia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t</div>

\t\t<div
\t\t\tclass=\"form-group ";
        // line 56
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"cp\" class=\"col-sm-2 control-label\">Código Postal</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"cp\" id=\"cp\"
\t\t\t\t\tvalue=\"";
        // line 60
        echo twig_escape_filter($this->env, set_value("cp"), "html", null, true);
        echo "\"> <span>";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array());
        echo "</span>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div
\t\t\tclass=\"form-group ";
        // line 65
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"cp\" class=\"col-sm-2 control-label\">Descripción</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t<textarea class=\"form-control\" rows=\"5\" id=\"descripcion\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, set_value("descripcion"), "html", null, true);
        echo "\"></textarea>
\t\t\t\t <span>";
        // line 69
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array());
        echo "</span>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<label> <input type=\"checkbox\" id=\"copiaDatos\"> Copiar datos
\t\t\t\t\t\tusuario
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t <input type=\"hidden\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "idUsuario", array()), "html", null, true);
        echo "\" name=\"id\" />

\t\t<div class=\"form-group\">
\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Enviar</button>
\t\t\t</div>
\t\t</div>
\t\t</form>
\t</div>
\t<div class=\"row\"></div>
</div>


";
    }

    // line 96
    public function block_script($context, array $blocks = array())
    {
        // line 97
        echo "

<script type=\"text/javascript\">

\t\$(document).ready(function(){

\t\t\$('#copiaDatos').click(function(){\t
\t\t\t if(\$(this).is(\":checked\")){
\t\t\t\t    \$('#nombre').val('";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "nombre", array()), "html", null, true);
        echo "');
\t\t\t\t\t\$('#apellidos').val('";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "apellidos", array()), "html", null, true);
        echo "');\t
\t\t\t\t\t\$('#dni').val('";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "dni", array()), "html", null, true);
        echo "');\t
\t\t\t\t\t\$('#direccion').val('";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "direccion", array()), "html", null, true);
        echo "');\t\t
\t\t\t\t\t\$('#cp').val('";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "cp", array()), "html", null, true);
        echo "');\t
\t\t\t\t\t\$('#provincia').val('";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "idProvincia", array()), "html", null, true);
        echo "');\t\t
\t            }
\t            else if(\$(this).is(\":not(:checked)\")){
\t            \t\$('#nombre').val('');
\t\t\t\t\t\$('#apellidos').val('');
\t\t\t\t\t\$('#dni').val('');
\t\t\t\t\t\$('#direccion').val('');
\t\t\t\t\t\$('#cp').val('');
\t\t\t\t\t\$('#provincia').val('1');
\t            }\t
\t\t\t\t
\t\t\t\t
\t\t});
\t\t\t

\t\t\$('#cantidad').click(function(){
\t\t\t if (\$('#formAdd').hasClass('form-group has-error')){\t\t    \t
\t\t    \t \$('#formAdd').removeClass('form-group has-error').addClass('form-group');
\t\t    \t \$('#errorCantidad').text('');
\t\t\t}
\t\t});\t
\t\t
\t});



</script>
";
    }

    public function getTemplateName()
    {
        return "carro/detalle_envio_carro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 110,  237 => 109,  233 => 108,  229 => 107,  225 => 106,  221 => 105,  211 => 97,  208 => 96,  190 => 83,  173 => 69,  169 => 68,  161 => 65,  151 => 60,  142 => 56,  135 => 51,  124 => 49,  120 => 47,  110 => 40,  101 => 36,  91 => 31,  82 => 27,  75 => 22,  71 => 21,  62 => 17,  53 => 13,  44 => 9,  39 => 7,  32 => 2,  29 => 1,);
    }
}
