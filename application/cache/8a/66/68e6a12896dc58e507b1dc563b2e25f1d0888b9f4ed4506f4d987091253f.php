<?php

/* usuario/nueva_pwd_formulario.twig */
class __TwigTemplate_8a6668e6a12896dc58e507b1dc563b2e25f1d0888b9f4ed4506f4d987091253f extends Twig_Template
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
\t\t<h3>Restablecer Contraseña</h3>
\t\t<hr />
\t\t";
        // line 14
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "form_email", array());
        echo "
\t\t<div class=\"form-group ";
        // line 15
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"email\" class=\"col-sm-2 control-label\">Email</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\"
\t\t\t\t\tplaceholder=\"\">
\t\t\t\t\t <span>";
        // line 20
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array());
        echo "</span>
\t\t\t</div>
\t\t</div>

\t\t<input type=\"hidden\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "token", array()), "html", null, true);
        echo "\" name=\"tokenLogin\" />

\t\t<div class=\"form-group\">
\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Enviar contraseña</button>
\t\t\t</div>
\t\t</div>
\t\t</form>
\t</div>



</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "usuario/nueva_pwd_formulario.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 24,  67 => 20,  57 => 15,  53 => 14,  47 => 10,  41 => 7,  38 => 6,  36 => 5,  31 => 2,  28 => 1,);
    }
}
