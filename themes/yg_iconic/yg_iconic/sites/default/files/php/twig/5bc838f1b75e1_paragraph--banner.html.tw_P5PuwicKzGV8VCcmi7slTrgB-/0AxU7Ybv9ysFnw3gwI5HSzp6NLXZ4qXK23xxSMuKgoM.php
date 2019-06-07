<?php

/* themes/yg_iconic/templates/paragraph--banner.html.twig */
class __TwigTemplate_789dcff2ae9c983a0f48b1bbd324d7257b72b034188967784f5ad99b4831c657 extends Twig_Template
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
        $tags = array("if" => 11);
        $filters = array("render" => 13);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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
        echo "<div class=\"bg-grediunt\">
   <div class=\"bg-banner-img clip-ellipse\" style=\"background-image: url(";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_banner_image", array()), 0, array()), "html", null, true));
        echo ");\">
      <div class=\"ovrllay\">
         <section id=\"banner\" class=\" mb-90\">
            <div class=\"container \">
               <div class=\"row\">
                  <!-- #banner-text start -->            
                  <div id=\"banner-text\" class=\"col-md-12 text-c text-center \">
                     <h5 class=\"wow fadeInUp main-h\" data-wow-delay=\"0.2s\" >";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_title", array()), 0, array()), "html", null, true));
        echo "</h5>
                     <p class=\"banner-text wow fadeInUp main-h3\" data-wow-delay=\"0.8s\">";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_description", array()), 0, array()), "html", null, true));
        echo "</p>
                     ";
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_button_link", array()), 0, array())) {
            // line 12
            echo "                     <div class=\"top-banner wow fadeInRight\">
                        <a id=\"#services\"  href=\"";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_button_link", array()), 0, array(), "array"), "#url", array(), "array")), "html", null, true));
            echo "\" class=\"btn btn-default  wow fadeInUp  js-scroll-trigger\" data-wow-delay=\"1s\" href=\"#\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_button_link", array()), 0, array(), "array"), "#title", array(), "array")), "html", null, true));
            echo "</a>
                     </div>
                     ";
        }
        // line 16
        echo "                  </div>
                  <!-- /#banner-text End -->
               </div>
            </div>
         </section>
      </div>
   </div>
</div>         ";
    }

    public function getTemplateName()
    {
        return "themes/yg_iconic/templates/paragraph--banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 16,  69 => 13,  66 => 12,  64 => 11,  60 => 10,  56 => 9,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/yg_iconic/templates/paragraph--banner.html.twig", "/var/www/html/yg_iconic/themes/yg_iconic/templates/paragraph--banner.html.twig");
    }
}
