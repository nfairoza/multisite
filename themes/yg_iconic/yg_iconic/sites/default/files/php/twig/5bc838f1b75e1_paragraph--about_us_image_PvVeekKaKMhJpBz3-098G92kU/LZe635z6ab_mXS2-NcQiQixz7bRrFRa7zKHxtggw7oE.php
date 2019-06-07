<?php

/* themes/yg_iconic/templates/paragraph--about_us_image_with_video_popup.html.twig */
class __TwigTemplate_fc233fdf46241009fbfe6aadfbb53bbe8abc97cb8dbc78ba0404b48a888613ee extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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
        echo " <div  id=\"about\"  class=\" back-right-text-c mt-50 wow fadeInUp \">
         <div class=\"container about_top-400\">
            <div class=\"title wow fadeInUp mb_150  \" style=\"visibility: visible; animation-name: fadeInUp;\">
                  <h2 class=\"text-left pt-0\"><span class=\"font_30\"> ";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_title", array()), 0, array()), "html", null, true));
        echo "</span> </h2>
                 
               </div>
            <div class=\"row\">
               <div class=\"col-md-6  \">
               </div>
               <div class=\"col-md-6  \">

                  <div class=\"about-right wow fadeInUp\">
                     <h2 class=\"text-left\">";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_sub_title", array()), 0, array()), "html", null, true));
        echo "</h2 >
                  </div>
               </div>
            </div>
            <div class=\"row text-left box-s\">
               <div class=\"col-md-6\">
                  <div class=\"title wow fadeInUp\">
                     <img src=\"";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_banner_image", array()), 0, array()), "html", null, true));
        echo "\" class=\"posi-r-img\">
                  </div>
                  <div class=\"\">
                     <a href=\"";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_video_url", array()), 0, array()), "html", null, true));
        echo "\" class=\"popup-youtube\"><img  src=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_video_play_icon", array()), 0, array()), "html", null, true));
        echo "\" class=\"video-a\"></a>
                  </div>
               </div>
               <div class=\"col-md-6 wow fadeInUp\">
                  <div class=\"services-right\">
                     <h2 class=\"about_bottom_r\">";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_package_title", array()), 0, array()), "html", null, true));
        echo "</h2>
                     <p class=\"services-right-text\">";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_body", array()), 0, array()), "html", null, true));
        echo "</p>
                  </div>
               </div>
            </div>
         </div>
      </div>";
    }

    public function getTemplateName()
    {
        return "themes/yg_iconic/templates/paragraph--about_us_image_with_video_popup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  86 => 28,  76 => 23,  70 => 20,  60 => 13,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/yg_iconic/templates/paragraph--about_us_image_with_video_popup.html.twig", "/var/www/html/yg_iconic/themes/yg_iconic/templates/paragraph--about_us_image_with_video_popup.html.twig");
    }
}
