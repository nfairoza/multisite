<?php

/* themes/yg_iconic/templates/paragraph--image_with_video_popup.html.twig */
class __TwigTemplate_be8e94b4ccc32b6282d2cdf01a67f8c6a41f1afe645327926db7cca510e94b09 extends Twig_Template
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
        $filters = array("render" => 18);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('render'),
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
        echo " <div  id=\"about\"  class=\" back-right-text-c\">
<section class=\"\">
         <div class=\"container-fluid \">
            <div class=\"row text-left about_row \">
               <div class=\"col-md-6 p-0 clip-polygon\" style=\"background: url(";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_banner_image", array()), 0, array()), "html", null, true));
        echo ") left top no-repeat\" >
                  
                  <div class=\"video-img\">
                     <a href=\"";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_video_url", array()), 0, array()), "html", null, true));
        echo "\" class=\"popup-youtube\"><img  src=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_video_play_icon", array()), 0, array()), "html", null, true));
        echo "\"></a>
                  </div>
               </div>
               <div class=\"col-md-6 wow fadeInUp\">
                  <div class=\"title-left wow fadeInUp\">
                     <h2 class=\"text-left wow fadeInUp \" data-wow-delay=\"1s\" style=\"visibility: visible; animation-delay: 1s; animation-name: fadeInUp;\">";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_title", array()), 0, array()), "html", null, true));
        echo "</h2>
                  </div>
                  <p class=\"about_h wow fadeInUp \" data-wow-delay=\"1s\" style=\"visibility: visible; animation-name: fadeInRight;\">";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_sub_title", array()), 0, array()), "html", null, true));
        echo "</p>
                  <p class=\"about_bottom_h wow fadeInUp \" data-wow-delay=\"1s\" style=\"visibility: visible; animation-delay: 1s; animation-name: fadeInUp;\">";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_description", array()), 0, array()), "html", null, true));
        echo "</p>
                  <div class=\"top-banner wow fadeInRight text-left\" style=\"visibility: visible; animation-name: fadeInRight;\">
                     <a id=\"#services\" href=\"";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_button_link", array()), 0, array(), "array"), "#url", array(), "array")), "html", null, true));
        echo "\" class=\"btn btn-default  wow fadeInUp  js-scroll-trigger\" data-wow-delay=\"1s\" style=\"visibility: visible; animation-delay: 1s; animation-name: fadeInUp;\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_button_link", array()), 0, array(), "array"), "#title", array(), "array")), "html", null, true));
        echo "</a>
                  </div>
               </div>
            </div>
         </div>
         </section>
      </div>   

        ";
    }

    public function getTemplateName()
    {
        return "themes/yg_iconic/templates/paragraph--image_with_video_popup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  74 => 16,  70 => 15,  65 => 13,  55 => 8,  49 => 5,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/yg_iconic/templates/paragraph--image_with_video_popup.html.twig", "/var/www/html/yg_iconic/themes/yg_iconic/templates/paragraph--image_with_video_popup.html.twig");
    }
}
