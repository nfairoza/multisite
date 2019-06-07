<?php

/* themes/yg_iconic/templates/paragraph--contact_us_section.html.twig */
class __TwigTemplate_f6b902a862992256c81a2e7e160484d576ddd0c1cb0e5086ece9e2ed84900767 extends Twig_Template
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
        $tags = array("if" => 21);
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
        echo "<section id=\"contact\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"section-heading left\">
                    <h4>";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_title", array()), 0, array()), "html", null, true));
        echo "</h4></div>
                <div class=\"contact-form-box margin-30px-top\">
                    <div class=\"no-margin-lr\" id=\"success-contact-form\" style=\"display: none;\"></div>
                    ";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_form", array()), 0, array()), "html", null, true));
        echo "
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"contact-info-box padding-30px-left sm-no-padding\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"contact-info-section no-padding-top margin-10px-top\">
                                <h4>";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_sub_title", array()), 0, array()), "html", null, true));
        echo "</h4>
                                <p>";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_description", array()), 0, array()), "html", null, true));
        echo "</p>
                            </div>
                        </div>
                        ";
        // line 21
        if (((($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_package_title", array()), 0, array()) || $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_address", array()), 0, array())) || $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_video_url", array()), 0, array())) || $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_email", array()), 0, array()))) {
            // line 22
            echo "                        <div class=\"col-12\">
                            <div class=\"contact-info-section\">
                                <h4>";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_package_title", array()), 0, array()), "html", null, true));
            echo "</h4>
                                <ul class=\"list-style-1 no-margin-bottom\">
                                    ";
            // line 26
            if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_address", array()), 0, array())) {
                // line 27
                echo "                                    <li>
                                        <p><i class=\"fa fa-phone text-center\"></i> <strong>Address:</strong> ";
                // line 28
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_address", array()), 0, array()), "html", null, true));
                echo "</p>
                                    </li>
                                    ";
            }
            // line 31
            echo "                                    ";
            if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_video_url", array()), 0, array())) {
                // line 32
                echo "                                    <li>
                                        <p><i class=\"fa fa-globe text-center\"></i> <strong>Phone:</strong>";
                // line 33
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_video_url", array()), 0, array()), "html", null, true));
                echo "</p>
                                    </li>
                                    ";
            }
            // line 36
            echo "                                    ";
            if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_email", array()), 0, array())) {
                // line 37
                echo "                                    <li>
                                        <p><i class=\"fa fa-envelope text-center\"></i> <strong>Email:</strong> <a href=\"mailto:";
                // line 38
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_email", array()), 0, array()), "html", null, true));
                echo "\" class=\"email_color_site\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_email", array()), 0, array()), "html", null, true));
                echo "</a></p>
                                    </li>
                                    ";
            }
            // line 41
            echo "                                </ul>
                            </div>
                        </div>
                        ";
        }
        // line 45
        echo "                        ";
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_facebook_url", array()), 0, array())) {
            // line 46
            echo "                        <div class=\"col-12\">
                            <div class=\"contact-info-section border-none no-padding-bottom no-margin-bottom\">
                                <h4>";
            // line 48
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_facebook_url", array()), 0, array()), "html", null, true));
            echo "</h4>
                                <ul class=\"list-style-2\">
                                    ";
            // line 50
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_package_details", array()), "html", null, true));
            echo "
                                </ul>
                            </div>
                        </div>
                        ";
        }
        // line 55
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"py_map_40\">
   <div class=\"container-fluid p0\">
      <div id=\"contatti\" class=\" maps\">
                        <iframe src=\"";
        // line 64
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_iframe_url", array()), 0, array()), "html", null, true));
        echo "\" frameborder=\"0\" style=\"border:0\" allowfullscreen=\"\"></iframe>
                     </div>
   </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/yg_iconic/templates/paragraph--contact_us_section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 64,  151 => 55,  143 => 50,  138 => 48,  134 => 46,  131 => 45,  125 => 41,  117 => 38,  114 => 37,  111 => 36,  105 => 33,  102 => 32,  99 => 31,  93 => 28,  90 => 27,  88 => 26,  83 => 24,  79 => 22,  77 => 21,  71 => 18,  67 => 17,  56 => 9,  50 => 6,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/yg_iconic/templates/paragraph--contact_us_section.html.twig", "/var/www/html/yg_iconic/themes/yg_iconic/templates/paragraph--contact_us_section.html.twig");
    }
}
