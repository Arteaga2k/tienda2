<?php

/* usuario/alta_formulario.twig */
class __TwigTemplate_b7c6a093d214d296b9b8d72ee56da7a804d83eabceedafff39ed3c51f24bbdfe extends Twig_Template
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
\t";
        // line 5
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array()))) {
            // line 6
            echo "\t   <div class=\"alert alert-danger\" role=\"alert\">";
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array());
            echo "</div>
\t";
        }
        // line 8
        echo "\t<div class=\"col-md-5\">

\t\t<h3>";
        // line 10
        echo ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()))) ? ((("Editando Usuario") ? ("Nuevo Usuario") : (""))) : (""));
        echo "</h3>
\t\t<hr />
\t\t";
        // line 12
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "form_alta", array());
        echo "
\t\t<div
\t\t\tclass=\"form-group ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()))) {
            echo "has-error";
        }
        echo "\">

\t\t\t<label for=\"username\" class=\"col-sm-2 control-label\">Username</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"username\"
\t\t\t\t\tname=\"username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, set_value("username"), "html", null, true);
        echo "\"> <span>";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array());
        // line 20
        echo "</span>
\t\t\t</div>
\t\t</div>

\t\t<div
\t\t\tclass=\"form-group ";
        // line 25
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"email\" class=\"col-sm-2 co ntrol-label\">Email</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\"
\t\t\t\t\tvalue=\"";
        // line 29
        echo twig_escape_filter($this->env, set_value("email"), "html", null, true);
        echo "\"> <span>";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array());
        echo "</span>
\t\t\t</div>

\t\t</div>

\t\t<div
\t\t\tclass=\"form-group ";
        // line 35
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"password\" class=\"col-sm-2 control-label\">Password</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\"
\t\t\t\t\tname=\"password\" placeholder=\"Password\"> <span>";
        // line 39
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array());
        // line 40
        echo "</span>
\t\t\t</div>
\t\t</div>

\t\t<div
\t\t\tclass=\"form-group ";
        // line 45
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "passconf", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"passconf\" class=\"col-sm-2 control-label\">Confirmar
\t\t\t\tPassword</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"passconf\"
\t\t\t\t\tid=\"passconf\" placeholder=\"Password\"> <span>";
        // line 50
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "passconf", array());
        echo "</span>
\t\t\t</div>
\t\t</div>

\t\t<hr />
\t\t<div
\t\t\tclass=\"form-group ";
        // line 56
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"nombre\" class=\"col-sm-2 control-label\">Nombre</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"nombre\" id=\"nombre\"
\t\t\t\t\tvalue=\"";
        // line 60
        echo twig_escape_filter($this->env, set_value("nombre"), "html", null, true);
        echo "\"> <span>";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array());
        echo "</span>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"form-group ";
        // line 64
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"apellidos\" class=\"col-sm-2 control-label\">Apellidos</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"apellidos\"
\t\t\t\t\tid=\"apellidos\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, set_value("apellidos"), "html", null, true);
        echo "\"> <span>";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array());
        // line 69
        echo "</span>
\t\t\t</div>
\t\t</div>

\t\t<div
\t\t\tclass=\"form-group ";
        // line 74
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dni", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"dni\" class=\"col-sm-2 control-label\">DNI</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"dni\" id=\"dni\"
\t\t\t\t\tvalue=\"";
        // line 78
        echo twig_escape_filter($this->env, set_value("dni"), "html", null, true);
        echo "\"> <span>";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dni", array());
        echo "</span>
\t\t\t</div>
\t\t</div>

\t\t<div
\t\t\tclass=\"form-group ";
        // line 83
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direccion", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"direccion\" class=\"col-sm-2 control-label\">Dirección</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"direccion\"
\t\t\t\t\tid=\"direccion\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, set_value("direccion"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group \">
\t\t\t<label for=\"provincia\" class=\"col-sm-2 control-label\">Provincia</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select class=\"form-control\" name=\"provincia\" id=\"provincia\"> ";
        // line 94
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["provincias"]) ? $context["provincias"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["provincia"]) {
            // line 96
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
        // line 98
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t</div>

\t\t<div
\t\t\tclass=\"form-group ";
        // line 103
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"cp\" class=\"col-sm-2 control-label\">Código Postal</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"cp\" id=\"cp\"
\t\t\t\t\tvalue=\"";
        // line 107
        echo twig_escape_filter($this->env, set_value("cp"), "html", null, true);
        echo "\"> <span>";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array());
        echo "</span>
\t\t\t</div>
\t\t</div>

\t\t<input type=\"hidden\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "token", array()), "html", null, true);
        echo "\" name=\"token\" /> ";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()))) {
            // line 112
            echo " <input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()), "html", null, true);
            echo "\" name=\"id\" />
\t\t";
        }
        // line 114
        echo "
\t\t<div class=\"form-group\">
\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Enviar</button>
\t\t\t</div>
\t\t</div>
\t\t</form>
\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "usuario/alta_formulario.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 114,  256 => 112,  252 => 111,  243 => 107,  234 => 103,  227 => 98,  216 => 96,  212 => 94,  202 => 87,  193 => 83,  183 => 78,  174 => 74,  167 => 69,  163 => 68,  154 => 64,  145 => 60,  136 => 56,  127 => 50,  117 => 45,  110 => 40,  108 => 39,  99 => 35,  88 => 29,  79 => 25,  72 => 20,  68 => 19,  58 => 14,  53 => 12,  48 => 10,  44 => 8,  38 => 6,  36 => 5,  31 => 2,  28 => 1,);
    }
}
