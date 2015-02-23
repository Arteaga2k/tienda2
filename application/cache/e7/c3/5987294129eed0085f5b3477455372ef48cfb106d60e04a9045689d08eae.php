<?php

/* home/carro.twig */
class __TwigTemplate_e7c35987294129eed0085f5b3477455372ef48cfb106d60e04a9045689d08eae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_templates/base.twig");

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
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
\t\t<table class=\"table table-bordered\">\t\t
\t\t  <tr>
\t\t      
\t\t          <th>Código</th>
\t\t          <th>Concepto</th>
\t\t          <th>Precio</th>
\t\t          <th>Unidades</th>
\t\t          <th>Total</th>
\t\t          <th>Opciones</th>\t\t          
\t\t      \t  
\t\t  </tr>\t
\t\t  
\t\t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            echo " \t
\t\t<tr>\t\t
\t\t  <td>1</td>
\t\t  <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombre", array()), "html", null, true);
            echo "</td>
\t\t  <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "precio", array()), "html", null, true);
            echo "€</td>
\t\t  <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
            echo "</td>
\t\t  <td>";
            // line 24
            echo twig_escape_filter($this->env, ($this->getAttribute($context["producto"], "precio", array()) * $this->getAttribute($context["producto"], "cantidad", array())), "html", null, true);
            echo "€</td>
\t\t  <td><a href=\"\">Eliminar</a></td>\t\t
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t<tr>
\t\t<td></td>
\t\t<td>Total</td>
\t\t<td></td>
\t\t<td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "articulos_total", array()), "html", null, true);
        echo "</td>
\t\t<td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "precio_total", array()), "html", null, true);
        echo "€</td>
\t\t</tr>
\t\t</table>
\t\t<p>
\t\t<a href=\"\" class=\"btn btn-default\">Vaciar Carrito</a>
\t\t<a href=\"";
        // line 38
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "home/realizaPedido\" class=\"btn btn-primary\">Realizar pedido</a>
\t\t</p>
\t</div>
</div>


";
    }

    public function getTemplateName()
    {
        return "home/carro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 38,  89 => 33,  85 => 32,  79 => 28,  69 => 24,  65 => 23,  61 => 22,  57 => 21,  49 => 18,  31 => 2,  28 => 1,);
    }
}
