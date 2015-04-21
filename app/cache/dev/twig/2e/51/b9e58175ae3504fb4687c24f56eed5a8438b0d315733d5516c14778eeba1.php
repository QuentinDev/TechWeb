<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_2e51b9e58175ae3504fb4687c24f56eed5a8438b0d315733d5516c14778eeba1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>TechWeb</title>
    <meta charset=\"UTF-8\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/wactechweb/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/wactechweb/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/wactechweb/css/stickyfooter.css"), "html", null, true);
        echo "\">
    <link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
</head>
<body>
    
    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">TECHWEB</a>
            </div>
            <div id=\"navbar\" class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"\">
                        <a href=\"../\">Accueil</a>
                    </li>
                    ";
        // line 29
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 30
            echo "                        <li>
                            <a>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " </a>
                        </li>
                        <li>
                            <a href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                ";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                            </a>
                        </li>
                    ";
        } else {
            // line 39
            echo "                        
                            <li><a href=\"/register\">S'inscrire</a></li>
                            <li><a href=\"/login\">Se connecter</a></li>
                            ";
            // line 43
            echo "                        
                    ";
        }
        // line 45
        echo "

                </ul>
            </div>
        </div>
    </nav>

    ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 53
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 54
                echo "            <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                ";
                // line 55
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "

    ";
        // line 68
        echo "
    <div>
        ";
        // line 70
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 72
        echo "    </div>

    <footer class=\"footer\">
        <div class=\"container\">
            <p class=\"text-muted\">TechWeb.</p>
        </div>
    </footer>

<script type=\"text/javascript\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/wactechweb/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/wactechweb/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html> 
";
    }

    // line 70
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 71
        echo "        ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 71,  160 => 70,  152 => 81,  148 => 80,  138 => 72,  136 => 70,  132 => 68,  128 => 59,  122 => 58,  113 => 55,  108 => 54,  103 => 53,  99 => 52,  90 => 45,  86 => 43,  81 => 39,  74 => 35,  70 => 34,  64 => 31,  61 => 30,  59 => 29,  35 => 8,  31 => 7,  27 => 6,  20 => 1,);
    }
}
