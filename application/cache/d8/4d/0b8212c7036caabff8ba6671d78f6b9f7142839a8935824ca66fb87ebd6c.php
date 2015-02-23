<?php

/* usuario/panel_usuario.twig */
class __TwigTemplate_d84d0b8212c7036caabff8ba6671d78f6b9f7142839a8935824ca66fb87ebd6c extends Twig_Template
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
    ";
        // line 4
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array()))) {
            // line 5
            echo "\t   <div class=\"alert alert-danger\" role=\"alert\">";
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array());
            echo "</div>
\t";
        }
        // line 7
        echo "\t<h1>
\t\t<small>Datos Personales</small>
\t</h1>
\t<label for=\"\"><a
\t\thref=\"";
        // line 11
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "usuario/editaUsuario/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "idUsuario", array()), "html", null, true);
        echo "\">Modificar
\t\t\tdatos</a></label>
\t<div class=\"well\">
\t\t<p>Nombre: ";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nombre", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "apellidos", array())), "html", null, true);
        echo "</p>
\t\t<p>DNI: ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "dni", array()), "html", null, true);
        echo "</p>
\t\t<p>Provincia: ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "provincia", array()), "html", null, true);
        echo "</p>
\t\t<p>Dirección: ";
        // line 17
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "direccion", array())), "html", null, true);
        echo "</p>
\t\t<p>Código postal: ";
        // line 18
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "cp", array())), "html", null, true);
        echo "</p>
\t</div>


\t<h1>
\t\t<small>Pedidos en proceso</small>
\t</h1>
\t<table class=\"table table-hover\">
\t\t<tr>

\t\t\t<th>Código</th>
\t\t\t<th>Fecha creación</th>
\t\t\t<th>Fecha entrega</th>
\t\t\t<th>Estado Actual</th>
\t\t\t<th>Operaciones</th>
\t\t</tr>
\t\t";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedsNoProce"]) ? $context["pedsNoProce"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pedNoProce"]) {
            // line 35
            echo "\t\t<tr>
\t\t\t<form
\t\t\t\taction=\"";
            // line 37
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "pedido/cancelaPedido/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedNoProce"], "idPedido", array()), "html", null, true);
            echo "\">
\t\t\t
\t\t\t
\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedNoProce"], "idPedido", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedNoProce"], "fecha_creacion", array()), "html", null, true);
            echo "</td>
\t\t\t<td>--</td>
\t\t\t<td>Pendiente de procesar</td>
\t\t\t<td><a class=\"btn btn-default\"
\t\t\t\thref=\"";
            // line 45
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "pedido/factura/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedNoProce"], "idPedido", array()), "html", null, true);
            echo "\">Ver</a>
\t\t\t\t<!-- Button trigger modal -->
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\"
\t\t\t\t\tdata-target=\"#borrarModal\">Eliminar</button>
\t\t\t</td>

\t\t\t<!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"borrarModal\" tabindex=\"-1\" role=\"dialog\"
\t\t\t\taria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">Confirmación</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">Este pedido será eliminado,
\t\t\t\t\t\t\t¿estás seguro?</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"
\t\t\t\t\t\t\t\tdata-dismiss=\"modal\">Cancelar</button>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" onclick=\"\"
\t\t\t\t\t\t\t\tid=\"confirmacion\">Confirmar</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</form>
\t\t</tr>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedNoProce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t</table>


\t<h1>
\t\t<small>Historial pedidos</small>
\t</h1>
\t<table class=\"table table-hover\">
\t\t<tr>
\t\t\t<th>Código</th>
\t\t\t<th>Fecha creación</th>
\t\t\t<th>Fecha entrega</th>
\t\t\t<th>Factura</th>
\t\t\t<th>Estado Actual</th>
\t\t\t<th>Operaciones</th>
\t\t</tr>
\t\t";
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) ? $context["pedidos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            // line 93
            echo "\t\t<tr>
\t\t\t<td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "idPedido", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "fecha_creacion", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "fecha_entrega", array()), "html", null, true);
            echo "-</td>
\t\t\t<td><a href=\"";
            // line 97
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "pedido/factura/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "idPedido", array()), "html", null, true);
            echo "/0\"><span
\t\t\t\t\tclass=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span></a></td>
\t\t\t<td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "estado", array()), "html", null, true);
            echo "</td>
\t\t\t<td><a href=\"";
            // line 100
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "pedido/factura/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "idPedido", array()), "html", null, true);
            echo "/1\">Ver</a></td>
\t\t</tr>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "\t</table>


</div>

";
    }

    // line 109
    public function block_script($context, array $blocks = array())
    {
        // line 110
        echo "

<script type=\"text/javascript\">

</script>
";
    }

    public function getTemplateName()
    {
        return "usuario/panel_usuario.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 110,  230 => 109,  221 => 104,  209 => 100,  205 => 99,  198 => 97,  194 => 96,  190 => 95,  186 => 94,  183 => 93,  179 => 92,  162 => 77,  122 => 45,  115 => 41,  111 => 40,  103 => 37,  99 => 35,  95 => 34,  76 => 18,  72 => 17,  68 => 16,  64 => 15,  58 => 14,  50 => 11,  44 => 7,  38 => 5,  36 => 4,  32 => 2,  29 => 1,);
    }
}
