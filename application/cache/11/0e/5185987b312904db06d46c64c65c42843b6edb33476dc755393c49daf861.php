<?php

/* my_template.html.twig */
class __TwigTemplate_110e5185987b312904db06d46c64c65c42843b6edb33476dc755393c49daf861 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"es\">
<head>
<meta charset=\"UTF-8\" />
<title>Problema 3</title>

<p>Hola ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : null), "html", null, true);
        echo "</p>


</head>
<body>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "my_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }
}
