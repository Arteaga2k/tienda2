<?php

/* pedido/exito_pedido.twig */
class __TwigTemplate_294973a9b376716c40518d4fb28de0b4a5c9b2036528c5627d26d101fa7db5dc extends Twig_Template
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
    <div class=\"bg-primary\">
\t<p >Su pedido ha sido procesado con éxito</p>
\t</div>
\t<a href=\"\" class=\"btn btn-primary\">Aceptar</a>
</div>


";
    }

    public function getTemplateName()
    {
        return "pedido/exito_pedido.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 2,  28 => 1,);
    }
}
