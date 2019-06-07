<?php

/* themes/yg_iconic/templates/paragraph--team_member.html.twig */
class __TwigTemplate_e2b3c20759029e6151fc8203d1cd729b0f668b5ec4afcb03aad307dca1145b5b extends Twig_Template
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
        $tags = array("if" => 10);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"col-md-4 col-sm-6 wow fadeInUp\" style=\"visibility: visible; animation-name: fadeInUp;\">
                  <div class=\"team_membar\">
                     <img src=\"";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_banner_image", array()), 0, array()), "html", null, true));
        echo "\" alt=\"\">
                     <div class=\"team_content\">
                        <div class=\" float-left  \">
                           <h5 class=\"name\">";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_title", array()), 0, array()), "html", null, true));
        echo "</h5>
                           <h6>";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_sub_title", array()), 0, array()), "html", null, true));
        echo "</h6>
                        </div>
                        <ul>
                           ";
        // line 10
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_facebook_url", array()), 0, array())) {
            // line 11
            echo "                           <li><a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_facebook_url", array()), 0, array()), "html", null, true));
            echo "\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                           ";
        }
        // line 13
        echo "                           ";
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_twitter_url", array()), 0, array())) {
            // line 14
            echo "                           <li><a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_twitter_url", array()), 0, array()), "html", null, true));
            echo "\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                           ";
        }
        // line 16
        echo "                           ";
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_linkendin_url", array()), 0, array())) {
            // line 17
            echo "                           <li><a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_linkendin_url", array()), 0, array()), "html", null, true));
            echo "\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                           ";
        }
        // line 19
        echo "                        </ul>
                     </div>
                  </div>
               </div>";
    }

    public function getTemplateName()
    {
        return "themes/yg_iconic/templates/paragraph--team_member.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 19,  83 => 17,  80 => 16,  74 => 14,  71 => 13,  65 => 11,  63 => 10,  57 => 7,  53 => 6,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/yg_iconic/templates/paragraph--team_member.html.twig", "/var/www/html/yg_iconic/themes/yg_iconic/templates/paragraph--team_member.html.twig");
    }
}
