<?php

/* usuario/formulario.twig */
class __TwigTemplate_4dd9a8fc2e3c4359c2a2e18d0f2782082ebe9096b9329a36b1f94709abd06ed3 extends Twig_Template
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

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        // line 3
        echo "

<div class=\"row\"> 
    ";
        // line 6
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array()))) {
            // line 7
            echo "    
    <div class=\"alert alert-danger\" role=\"alert\">";
            // line 8
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array());
            echo "</div>
    
    ";
        }
        // line 11
        echo "\t<div class=\"col-md-5\">
\t<h3>Nuevo Usuario</h3>
\t<hr />
       ";
        // line 14
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "form_alta", array());
        echo "\t\t
         <div class=\"form-group ";
        // line 15
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()))) {
            echo "has-error";
        }
        echo "\">
            <label for=\"username\" class=\"col-sm-2 control-label\">Username</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, set_value("username"), "html", null, true);
        echo "\">
                <span>";
        // line 19
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array());
        echo "</span>
            </div>
          
         </div>
          <div class=\"form-group ";
        // line 23
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()))) {
            echo "has-error";
        }
        echo "\">
            <label for=\"email\" class=\"col-sm-2 control-label\">Email</label>
            <div class=\"col-sm-10\">
              <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, set_value("email"), "html", null, true);
        echo "\">
                <span>";
        // line 27
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array());
        echo "</span>
            </div>
           
          </div>
          
          <div class=\"form-group ";
        // line 32
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()))) {
            echo "has-error";
        }
        echo "\">
            <label for=\"password\" class=\"col-sm-2 control-label\">Password</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Password\">
                <span>";
        // line 36
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array());
        echo "</span>
            </div>
          </div> 
                    
           <div class=\"form-group ";
        // line 40
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "passconf", array()))) {
            echo "has-error";
        }
        echo "\">
            <label for=\"passconf\" class=\"col-sm-2 control-label\">Confirmar Password</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" class=\"form-control\" name=\"passconf\" id=\"passconf\" placeholder=\"Password\">
                <span>";
        // line 44
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "passconf", array());
        echo "</span>
            </div>
          </div> 
                  
          <hr />
           <div class=\"form-group ";
        // line 49
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()))) {
            echo "has-error";
        }
        echo "\">
            <label for=\"nombre\" class=\"col-sm-2 control-label\">Nombre</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"nombre\" id=\"nombre\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, set_value("nombre"), "html", null, true);
        echo "\">
               <span>";
        // line 53
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array());
        echo "</span>
            </div>
          </div>
           <div class=\"form-group ";
        // line 56
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array()))) {
            echo "has-error";
        }
        echo "\">
            <label for=\"apellidos\" class=\"col-sm-2 control-label\">Apellidos</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"apellidos\" id=\"apellidos\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, set_value("apellidos"), "html", null, true);
        echo "\">
               <span>";
        // line 60
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array());
        echo "</span>
            </div>
          </div>
          
          <div class=\"form-group ";
        // line 64
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dni", array()))) {
            echo "has-error";
        }
        echo "\">
            <label for=\"dni\" class=\"col-sm-2 control-label\">DNI</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"dni\" id=\"dni\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, set_value("dni"), "html", null, true);
        echo "\">
               <span>";
        // line 68
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dni", array());
        echo "</span>
            </div>
          </div>
          
          <div class=\"form-group ";
        // line 72
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direccion", array()))) {
            echo "has-error";
        }
        echo "\">
            <label for=\"direccion\" class=\"col-sm-2 control-label\">Dirección</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"direccion\" id=\"direccion\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, set_value("direccion"), "html", null, true);
        echo "\">
            </div>
          </div>
          
          <div class=\"form-group \">
\t\t  <label for=\"provincia\" class=\"col-sm-2 control-label\">Provincia</label>
    \t\t  <div class=\"col-sm-10\">
    \t\t\t<select class=\"form-control\" name=\"provincia\" id=\"provincia\">
    \t\t\t\t";
        // line 83
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["provincias"]) ? $context["provincias"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["provincia"]) {
            // line 84
            echo "    \t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["provincia"], "idProvincia", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["provincia"], "nombre", array()), "html", null, true);
            // line 85
            echo "</option> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provincia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "    \t\t\t</select>
    \t\t  </div>
\t      </div>
          
           <div class=\"form-group ";
        // line 90
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array()))) {
            echo "has-error";
        }
        echo "\">
            <label for=\"cp\" class=\"col-sm-2 control-label\">Código Postal</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"cp\" id=\"cp\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, set_value("cp"), "html", null, true);
        echo "\">
               <span>";
        // line 94
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array());
        echo "</span>
            </div>
          </div>
          
          <input type=\"hidden\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "token", array()), "html", null, true);
        echo "\" name=\"token\" />
         
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <button type=\"submit\" class=\"btn btn-primary\">Crear cuenta</button>
            </div>
          </div>
        </form>
    </div>
    
    <div class=\"col-md-5 col-md-offset-1\">
    <h3>Usuario Registrado</h3>
    <hr />
    ";
        // line 111
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "form_login", array());
        echo "\t\t
         <div class=\"form-group\">
            <label for=\"usernameLogin\" class=\"col-sm-2 control-label\">Username</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"usernameLogin\" name=\"usernameLogin\" placeholder=\"\">
            </div>
        </div>
        
        <div class=\"form-group\">
            <label for=\"passwordLogin\" class=\"col-sm-2 control-label\">Password</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" class=\"form-control\" name=\"passwordLogin\" id=\"passwordLogin\" placeholder=\"\">
            </div>
        </div> 
        
         <input type=\"hidden\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "token", array()), "html", null, true);
        echo "\" name=\"tokenLogin\" />
        
         <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <button type=\"submit\" class=\"btn btn-primary\">Acceder</button>
            </div>
          </div>
      </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "usuario/formulario.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 126,  259 => 111,  243 => 98,  236 => 94,  232 => 93,  224 => 90,  218 => 86,  212 => 85,  207 => 84,  203 => 83,  192 => 75,  184 => 72,  177 => 68,  173 => 67,  165 => 64,  158 => 60,  154 => 59,  146 => 56,  140 => 53,  136 => 52,  128 => 49,  120 => 44,  111 => 40,  104 => 36,  95 => 32,  87 => 27,  83 => 26,  75 => 23,  68 => 19,  64 => 18,  56 => 15,  52 => 14,  47 => 11,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,);
    }
}
