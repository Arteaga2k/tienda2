<?php

/* carro/carro.twig */
class __TwigTemplate_841deb415d3313edc89599d8265f696ba384dd8650c7274217a9716387e9282b extends Twig_Template
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
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 25
            echo "\t\t\t<tr>
\t\t\t\t<td>1</td>
\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombre", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "precio", array()), "html", null, true);
            echo "€</td>
\t\t\t\t<td>
\t\t\t\t\t<form action=\"\">
\t\t\t\t\t\t<input type=\"text\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
            echo "\" />
\t\t\t\t\t</form>
\t\t\t\t</td>
\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, ($this->getAttribute($context["producto"], "precio", array()) * $this->getAttribute($context["producto"], "cantidad", array())), "html", null, true);
            echo "€</td>
\t\t\t\t<td><a href=\"\">Actualizar</a> <a href=\"\">Eliminar</a></td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t<tr>
\t\t\t\t<td></td>
\t\t\t\t<td>Total</td>
\t\t\t\t<td></td>
\t\t\t\t<td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "articulos_total", array()), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "precio_total", array()), "html", null, true);
        echo "€</td>
\t\t\t</tr>
\t\t</table>
\t\t<p>
\t\t\t<a href=\"";
        // line 47
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "carro/vaciarCarro\" class=\"btn btn-default\">Vaciar
\t\t\t\tCarrito</a> <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "carro/realizaPedido\"
\t\t\t\tclass=\"btn btn-primary\">Realizar pedido</a>
\t\t</p>
\t</div>
</div>


";
    }

    // line 55
    public function block_script($context, array $blocks = array())
    {
        // line 56
        echo "

<script type=\"text/javascript\">

\t\$(document).ready(function(){

\t\t\$('#actualizar').click(function(){
\t\t\t\t\t\t
\t\t\tvar cantidad = parseInt(\$('#cantidad').val());  
\t\t\t
\t\t\t// filtramos valor
\t\t\tif (\$.isNumeric(cantidad) && cantidad > 0){
\t\t\t\t\$.get(\"";
        // line 68
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "home/ajaxAddCart/\"+cantidad+\"/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "idProducto", array()), "html", null, true);
        echo "\",\"\",function(data)
\t\t\t\t{
\t\t\t\t    var json = JSON.parse(data);
\t\t\t\t    console.log(json);
\t\t\t\t   
\t\t\t    \tvar html = \"\";

\t\t\t    \tvar articulos_total = json.articulos_total;
\t\t\t    \tvar precio_total = json.precio_total;\t
\t\t\t    \t

\t\t\t    \t\$.each(json.items, function(key, value) {
\t\t\t    \t    console.log(key,value);
\t\t\t    \t    html += \"<tr><td></td><td>\"+value.nombre+\"</td><td>\"+value.precio+\" € x \" +value.cantidad+ \"</td></tr>\";\t\t\t    \t   \t\t    \t\t \t\t\t  \t    
\t\t\t    \t});
\t\t\t    \t
\t\t\t    \t\$('#table_cart').html(html);\t\t    \t\t\t 
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
        return "carro/carro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 68,  134 => 56,  131 => 55,  119 => 48,  115 => 47,  108 => 43,  104 => 42,  98 => 38,  88 => 34,  82 => 31,  76 => 28,  72 => 27,  68 => 25,  64 => 24,  49 => 11,  43 => 8,  40 => 7,  38 => 6,  32 => 2,  29 => 1,);
    }
}
