<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_9918d3ab125cf4a96836a50568164ec23f22f3af408f12a727dcde0cd0626221 extends Twig_Template
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
        // line 2
        echo "

<div class=\"form-container\">
\t<div class=\"container\">\t

\t<h3>S'inscrire</h3>
\t
\t\t<form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
\t    \t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
\t    \t<div>
\t        \t<input type=\"submit\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t    \t</div>
\t\t</form>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 12,  34 => 10,  28 => 9,  19 => 2,);
    }
}
