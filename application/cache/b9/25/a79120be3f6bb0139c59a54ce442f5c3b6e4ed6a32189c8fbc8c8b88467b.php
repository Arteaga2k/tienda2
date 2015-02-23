<?php

/* usuario/login_formulario.twig */
class __TwigTemplate_b925a79120be3f6bb0139c59a54ce442f5c3b6e4ed6a32189c8fbc8c8b88467b extends Twig_Template
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

<div class=\"row\">
\t";
        // line 5
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array()))) {
            // line 6
            echo "
\t<div class=\"alert alert-danger\" role=\"alert\">";
            // line 7
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array());
            echo "</div>

\t";
        }
        // line 10
        echo "
\t<div class=\"col-md-5\">
\t\t<h3>Acceso usuario</h3>
\t\t<hr />
\t\t";
        // line 14
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "form_login", array());
        echo "
\t\t<div class=\"form-group\">
\t\t\t<label for=\"usernameLogin\" class=\"col-sm-2 control-label\">Username</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"usernameLogin\"
\t\t\t\t\tname=\"usernameLogin\" placeholder=\"\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"passwordLogin\" class=\"col-sm-2 control-label\">Password</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"passwordLogin\"
\t\t\t\t\tid=\"passwordLogin\" placeholder=\"\">
\t\t\t</div>
\t\t</div>

\t\t<input type=\"hidden\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "token", array()), "html", null, true);
        echo "\" name=\"tokenLogin\" /> 

\t\t<div class=\"form-group\">
\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Acceder</button>
\t\t\t\t<a href=\"";
        // line 36
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "usuario/restablecePassword\" class=\"pull-right\">Recuperar contraseña</a>
\t\t\t\t<p>
\t\t\t\t<a href=\"";
        // line 38
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "usuario/creaUsuario\" class=\"pull-right\">Registrar cuenta</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t</form>
\t</div>
\t
\t 
\t 
\t </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "usuario/login_formulario.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 38,  81 => 36,  73 => 31,  53 => 14,  47 => 10,  41 => 7,  38 => 6,  36 => 5,  31 => 2,  28 => 1,);
    }
}
