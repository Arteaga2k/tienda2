<?php

/* pedido/datos_pedido.twig */
class __TwigTemplate_6ab17b0aebd04b3a257646e74cd13e9e17e32162360da0e6b66b4af0b2affc97 extends Twig_Template
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
\t\t<h1>
\t\t\t<small>Contenido del carrito</small>
\t\t</h1>
\t\t<hr />
\t\t<table class=\"table table-bordered\">
\t\t\t<tr>
\t\t\t\t<th>Código</th>
\t\t\t\t<th>Concepto</th>
\t\t\t\t<th>Precio</th>
\t\t\t\t<th>Unidades</th>
\t\t\t\t<th>Total</th>
\t\t\t</tr>

\t\t\t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 19
            echo "\t\t\t<tr>
\t\t\t\t<td>1</td>
\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombre", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "precio", array()), "html", null, true);
            echo "€</td>
\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, ($this->getAttribute($context["producto"], "precio", array()) * $this->getAttribute($context["producto"], "cantidad", array())), "html", null, true);
            echo "€</td>

\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t<tr>
\t\t\t\t<td></td>
\t\t\t\t<td>Total</td>
\t\t\t\t<td></td>
\t\t\t\t<td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "articulos_total", array()), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "precio_total", array()), "html", null, true);
        echo "€</td>
\t\t\t</tr>
\t\t</table>

\t\t<h1>
\t\t\t<small>Datos de envío</small>
\t\t</h1>
\t\t<hr />
\t\t";
        // line 41
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "form_direccion", array());
        echo "
\t\t<div
\t\t\tclass=\"form-group ";
        // line 43
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"nombre\" class=\"col-sm-2 control-label\">Nombre</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"nombre\" id=\"nombre\"
\t\t\t\t\tvalue=\"";
        // line 47
        echo twig_escape_filter($this->env, set_value("nombre"), "html", null, true);
        echo "\"> <span>";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array());
        echo "</span>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"form-group ";
        // line 51
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"apellidos\" class=\"col-sm-2 control-label\">Apellidos</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"apellidos\"
\t\t\t\t\tid=\"apellidos\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, set_value("apellidos"), "html", null, true);
        echo "\"> <span>";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array());
        // line 56
        echo "</span>
\t\t\t</div>
\t\t</div>

\t\t<div
\t\t\tclass=\"form-group ";
        // line 61
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dni", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"dni\" class=\"col-sm-2 control-label\">DNI</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"dni\" id=\"dni\"
\t\t\t\t\tvalue=\"";
        // line 65
        echo twig_escape_filter($this->env, set_value("dni"), "html", null, true);
        echo "\"> <span>";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dni", array());
        echo "</span>
\t\t\t</div>
\t\t</div>

\t\t<div
\t\t\tclass=\"form-group ";
        // line 70
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direccion", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"direccion\" class=\"col-sm-2 control-label\">Dirección</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"direccion\"
\t\t\t\t\tid=\"direccion\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, set_value("direccion"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group \">
\t\t\t<label for=\"provincia\" class=\"col-sm-2 control-label\">Provincia</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select class=\"form-control\" name=\"provincia\" id=\"provincia\"> ";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["provincias"]) ? $context["provincias"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["provincia"]) {
            // line 83
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
        // line 85
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t</div>

\t\t<div
\t\t\tclass=\"form-group ";
        // line 90
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"cp\" class=\"col-sm-2 control-label\">Código Postal</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"cp\" id=\"cp\"
\t\t\t\t\tvalue=\"";
        // line 94
        echo twig_escape_filter($this->env, set_value("cp"), "html", null, true);
        echo "\"> <span>";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array());
        echo "</span>
\t\t\t</div>
\t\t</div>

\t\t<div
\t\t\tclass=\"form-group ";
        // line 99
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"cp\" class=\"col-sm-2 control-label\">Descripción</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<textarea class=\"form-control\" rows=\"5\" id=\"descripcion\"
\t\t\t\t\tvalue=\"";
        // line 103
        echo twig_escape_filter($this->env, set_value("descripcion"), "html", null, true);
        echo "\"></textarea>
\t\t\t\t<span>";
        // line 104
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

\t\t<input type=\"hidden\" value=\"";
        // line 118
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

    // line 131
    public function block_script($context, array $blocks = array())
    {
        // line 132
        echo "

<script type=\"text/javascript\">

\t\$(document).ready(function(){

\t\t\$('#copiaDatos').click(function(){\t
\t\t\t if(\$(this).is(\":checked\")){
\t\t\t\t    \$('#nombre').val('";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "nombre", array()), "html", null, true);
        echo "');
\t\t\t\t\t\$('#apellidos').val('";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "apellidos", array()), "html", null, true);
        echo "');\t
\t\t\t\t\t\$('#dni').val('";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "dni", array()), "html", null, true);
        echo "');\t
\t\t\t\t\t\$('#direccion').val('";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "direccion", array()), "html", null, true);
        echo "');\t\t
\t\t\t\t\t\$('#cp').val('";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "cp", array()), "html", null, true);
        echo "');\t
\t\t\t\t\t\$('#provincia').val('";
        // line 145
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
        return "pedido/datos_pedido.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 145,  300 => 144,  296 => 143,  292 => 142,  288 => 141,  284 => 140,  274 => 132,  271 => 131,  253 => 118,  236 => 104,  232 => 103,  223 => 99,  213 => 94,  204 => 90,  197 => 85,  186 => 83,  182 => 81,  172 => 74,  163 => 70,  153 => 65,  144 => 61,  137 => 56,  133 => 55,  124 => 51,  115 => 47,  106 => 43,  101 => 41,  90 => 33,  86 => 32,  80 => 28,  70 => 24,  66 => 23,  62 => 22,  58 => 21,  54 => 19,  50 => 18,  32 => 2,  29 => 1,);
    }
}
