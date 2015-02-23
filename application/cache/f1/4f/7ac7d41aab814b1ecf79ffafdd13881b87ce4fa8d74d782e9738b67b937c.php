<?php

/* carro/detalle_carro.twig */
class __TwigTemplate_f14f7ac7d41aab814b1ecf79ffafdd13881b87ce4fa8d74d782e9738b67b937c extends Twig_Template
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
\t\t";
        // line 6
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array()))) {
            // line 7
            echo "
\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            // line 8
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array());
            echo "</div>

\t\t";
        }
        // line 11
        echo "
\t\t<h2>Contenido del Carrito de la Compra</h2>
\t\t<hr />

\t\t<table class=\"table table-bordered\">
\t\t\t<tr>
\t\t\t\t<th>Código</th>
\t\t\t\t<th>Concepto</th>
\t\t\t\t<th>Precio</th>
\t\t\t\t<th>Unidades</th>
\t\t\t\t<th>Total</th>
\t\t\t\t<th>Opciones</th>
\t\t\t</tr>

\t\t\t";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "items", array()));
        foreach ($context['_seq'] as $context["key"] => $context["producto"]) {
            // line 26
            echo "\t\t\t<tr>
\t\t\t\t<form id=\"formActualiza\" action=\"operacion\">

\t\t\t\t\t<input type=\"hidden\" name=\"idProducto\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" />
\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "precio", array()), "html", null, true);
            echo "€</td>
\t\t\t\t\t<td><input type=\"text\" name=\"cantidad\"
\t\t\t\t\t\tvalue=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
            echo "\" /></td>
\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, ($this->getAttribute($context["producto"], "precio", array()) * $this->getAttribute($context["producto"], "cantidad", array())), "html", null, true);
            echo "€</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"submit\" name=\"actualizar\" class=\"btn btn-default\">Actualizar</button>
\t\t\t\t\t\t<a class=\"btn btn-default\"
\t\t\t\t\t\thref=\"";
            // line 39
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "carro/eliminaItem/";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">Eliminar</a>
\t\t\t\t\t</td>
\t\t\t\t</form>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t<tr>
\t\t\t\t<td></td>
\t\t\t\t<td>Total</td>
\t\t\t\t<td></td>
\t\t\t\t<td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "articulos_total", array()), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "precio_total", array()), "html", null, true);
        echo "€</td>
\t\t\t</tr>
\t\t</table>
\t\t<p>
\t\t\t<a href=\"";
        // line 53
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "carro/vaciaCarro\" class=\"btn btn-default\">Vaciar
\t\t\t\tCarrito</a> <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "pedido/preparaPedido\"
\t\t\t\tclass=\"btn btn-primary\">Realizar pedido</a>
\t\t</p>
\t</div>
</div>


";
    }

    // line 61
    public function block_script($context, array $blocks = array())
    {
        // line 62
        echo "

<script type=\"text/javascript\">

\t\$(document).ready(function(){    

\t\t\$( \"#formActualiza\" ).submit(function( event ) {
\t\t\t event.preventDefault();
\t\t\t var cantidad = \$(\"[name='cantidad']\").val();
\t\t\t var idProducto;
\t\t\t// filtramos valor
\t\t\tif (\$.isNumeric(cantidad) && cantidad > 0){

\t\t\t\tidProducto = \$(\"[name='idProducto']\").val();
\t\t\t\t 
\t\t\t\t\$.get(\"";
        // line 77
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "carro/ajaxUpdateCart/\"+cantidad+\"/\"+idProducto+\"\",\"\",function(data)
\t\t\t\t{
\t\t\t\t    var json = JSON.parse(data);
\t\t\t\t    console.log(json);
\t\t\t\t   
\t\t\t    \tvar html = \"\";
\t\t\t    \tvar articulos_total = json.articulos_total;
\t\t\t    \tvar precio_total = json.precio_total;\t
\t\t\t\t    \t

\t\t\t    \t\$.each(json.items, function(key, value) {
\t\t\t    \t    console.log(key,value);
\t\t\t    \t    html += \"<tr><td></td><td>\"+value.nombre+\"</td><td>\"+value.precio+\" € x \" +value.cantidad+ \"</td></tr>\";\t\t\t    \t   \t\t    \t\t \t\t\t  \t    
\t\t\t    \t});\t\t\t    \t
\t\t\t    \t\$('#cesta').html('<span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span>'+ 
\t\t\t\t\t\t\t ' Cesta '+articulos_total+'<span class=\"caret\"></span> </a>');
\t\t\t\t\t\$('#table_cart').html(html);\t    \t\t\t 
\t\t\t\t});
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t    // mostrar error \t\t\t    
\t\t\t    \$('#formAdd').addClass('has-error');
\t\t\t    \$('#errorCantidad').text('Introduce un valor correcto');
\t\t\t}\t\t
\t\t\t 
\t\t});\t\t

\t\t/*\$('#cantidad').click(function(){
\t\t\t if (\$('#formAdd').hasClass('form-group has-error')){\t\t    \t
\t\t    \t \$('#formAdd').removeClass('form-group has-error').addClass('form-group');
\t\t    \t \$('#errorCantidad').text('');
\t\t\t}
\t\t});\t*/
\t\t
\t});



</script>
";
    }

    public function getTemplateName()
    {
        return "carro/detalle_carro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 77,  151 => 62,  148 => 61,  136 => 54,  132 => 53,  125 => 49,  121 => 48,  115 => 44,  102 => 39,  95 => 35,  91 => 34,  86 => 32,  82 => 31,  78 => 30,  74 => 29,  69 => 26,  65 => 25,  49 => 11,  43 => 8,  40 => 7,  38 => 6,  32 => 2,  29 => 1,);
    }
}
