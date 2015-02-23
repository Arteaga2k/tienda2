<?php

/* home/producto.twig */
class __TwigTemplate_eeb03ebad762e882318efcc14bff2f449876324508ff545657aa8673e716dbc7 extends Twig_Template
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

<div class=\"col-md-3\">
\t<p class=\"lead\">Tienda Virtual</p>
\t<div class=\"list-group\">
\t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            echo " <a
\t\t\thref=\"";
            // line 8
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "home/categoria/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "idCategoria", array()), "html", null, true);
            echo "\"
\t\t\tclass=\"list-group-item\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "nombre", array()), "html", null, true);
            echo "</a> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t</div>
</div>

<div class=\"col-md-9\">
\t<div class=\"row\">


\t\t<h1>
\t\t\t<a href=\"";
        // line 18
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "home/producto/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "idProducto", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "nombre", array()), "html", null, true);
        // line 19
        echo "</a>
\t\t</h1>
\t\t<hr>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-sm-6 col-lg-6 col-md-6\">
\t\t\t<img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "imagen", array()), "html", null, true);
        echo "\" alt=\"\">
\t\t</div>
\t\t<div class=\"col-sm-6 col-lg-6 col-md-6\">
\t\t\t<address>
\t\t\t\t<strong>Código Producto:</strong> <span>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "codigo", array()), "html", null, true);
        echo "</span><br />
\t\t\t\t<strong>Stock:</strong> <span>En Stock</span><br />
\t\t\t</address>
\t\t</div>
\t\t<div class=\"col-sm-6 col-lg-6 col-md-6\">
\t\t\t<h2>
\t\t\t\t<strong>Precio: €";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "precio", array()), "html", null, true);
        echo "</strong> <small>Iva incluído:
\t\t\t\t\t";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "iva", array()), "html", null, true);
        echo "%</small><br /> <br />
\t\t\t</h2>
\t\t</div>
\t\t<div class=\"col-sm-6 col-lg-6 col-md-6\">
\t\t\t";
        // line 41
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "form_open", array());
        echo "
\t\t\t<div class=\"form-group\" id=\"formAdd\">
\t\t\t\t<label for=\"cantidad\">Unidades</label> <input type=\"text\"
\t\t\t\t\tclass=\"form-control\" id=\"cantidad\" name=\"cantidad\" placeholder=\"\">
\t\t\t</div>
\t\t\t<!-- <button type=\"submit\" class=\"btn btn-primary\">Añadir al carro</button>-->
\t\t\t<p class=\"btn btn-primary\" id=\"add\">Añadir al carro</p>
\t\t\t<span id=\"errorCantidad\"></span>
\t\t\t</form>
\t\t</div>\t\t
\t</div>
\t
\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6 col-lg-6 col-md-6\">
\t\t\t\t<p>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "anuncio", array()), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t</div>

</div>
";
    }

    // line 60
    public function block_script($context, array $blocks = array())
    {
        // line 61
        echo "

<script type=\"text/javascript\">

\t\$(document).ready(function(){

\t\t\$('#add').click(function(){
\t\t\t\t\t\t
\t\t\tvar cantidad = parseInt(\$('#cantidad').val());  
\t\t\t
\t\t\t// filtramos valor
\t\t\tif (\$.isNumeric(cantidad) && cantidad > 0){
\t\t\t\t\$.get(\"";
        // line 73
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "carro/ajaxAddCart/\"+cantidad+\"/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "idProducto", array()), "html", null, true);
        echo "\",\"\",function(data)
\t\t\t\t{
\t\t\t\t    var json = JSON.parse(data);
\t\t\t\t    //console.log(json);
\t\t\t\t   
\t\t\t    \tvar html = \"\";
\t\t\t    

\t\t\t    \tvar articulos_total = json.articulos_total;
\t\t\t    \tvar precio_total = json.precio_total;\t
\t\t\t    \t

\t\t\t    \t\$.each(json.items, function(key, value) {
\t\t\t    \t    console.log(key,value);
\t\t\t    \t    html += \"<tr><td>\"+value.nombre+\"</td><td>\"+value.precio+\" € x \" +value.cantidad+ \"</td></tr>\";\t\t\t\t    \t   \t   \t\t    \t\t \t\t\t  \t    
\t\t\t    \t    
\t\t\t\t    });

\t\t\t    \t
\t\t\t    \t\$('#cesta').html('<span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span>'+ 
\t\t\t\t\t ' Cesta '+articulos_total+'<span class=\"caret\"></span> </a>');
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
        return "home/producto.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 73,  140 => 61,  137 => 60,  127 => 55,  110 => 41,  103 => 37,  99 => 36,  90 => 30,  83 => 26,  74 => 19,  68 => 18,  58 => 10,  51 => 9,  45 => 8,  39 => 7,  32 => 2,  29 => 1,);
    }
}
