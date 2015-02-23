<?php

/* pedido/form_confirma_pedido.twig */
class __TwigTemplate_3e46fd55cc4c021e817d8109266175b82146a5af27c786886ecb09ef872bbfce extends Twig_Template
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
\t\t<div class=\"col-sm-7 col-lg-7 col-md-7\">
\t\t\t<h2>Contenido del carro</h2>
\t\t\t<hr />
\t\t\t<table class=\"table table-hover\">
\t\t\t\t<tr>
\t\t\t\t\t<th>Código</th>
\t\t\t\t\t<th>Concepto</th>
\t\t\t\t\t<th>Precio</th>
\t\t\t\t\t<th>Unidades</th>
\t\t\t\t\t<th>Total</th>
\t\t\t\t</tr>

\t\t\t\t";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 18
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>1</td>
\t\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "precio", array()), "html", null, true);
            echo "€</td>
\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, ($this->getAttribute($context["producto"], "precio", array()) * $this->getAttribute($context["producto"], "cantidad", array())), "html", null, true);
            echo "€</td>
\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t</table>
\t\t</div>

\t\t<div class=\"col-sm-5 col-lg-5 col-md-5\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 well\">
\t\t\t\t\t<h3>Datos Facturación</h3>
\t\t\t\t\t<hr />
\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>";
        // line 35
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "nombre", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "apellidos", array())), "html", null, true);
        // line 36
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "dni", array()), "html", null, true);
        echo ")</strong>
\t\t\t\t\t</p>
\t\t\t\t\t<p>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "direccion", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "cp", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "email", array()), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12 well\">
\t\t\t\t\t<h3>Datos Envío</h3>
\t\t\t\t\t<hr />
\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>";
        // line 46
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pedido", array()), "nombre", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pedido", array()), "apellidos", array())), "html", null, true);
        // line 47
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pedido", array()), "dni", array()), "html", null, true);
        echo ")</strong>
\t\t\t\t\t</p>
\t\t\t\t\t<p>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pedido", array()), "direccion", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pedido", array()), "cp", array()), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t";
        // line 57
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "form_confirmaPedido", array());
        echo "
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"cp\" class=\"col-sm-2 control-label\">Condiciones legales</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<textarea class=\"form-control\" rows=\"5\" id=\"descripcion\">a rellenar</textarea>
\t\t\t\t\t<span>";
        // line 62
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array());
        echo "</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t<label> <input type=\"checkbox\" name=\"condicion\" id=\"condicion\"> He leído y
\t\t\t\t\t\t\tentiendo las condiciones de compra.
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<span>";
        // line 72
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "condicion", array());
        echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr />

\t\t\t<button class=\"btn btn-primary pull-right\" type=\"submit\">Confirmar</button>
\t\t\t</form>
\t\t</div>
\t</div>
</div>


";
    }

    public function getTemplateName()
    {
        return "pedido/form_confirma_pedido.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 72,  147 => 62,  139 => 57,  129 => 50,  125 => 49,  119 => 47,  115 => 46,  106 => 40,  102 => 39,  98 => 38,  92 => 36,  88 => 35,  77 => 26,  68 => 23,  64 => 22,  60 => 21,  56 => 20,  52 => 18,  48 => 17,  31 => 2,  28 => 1,);
    }
}
