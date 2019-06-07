<?php

/* themes/yg_iconic/templates/page--front.html.twig */
class __TwigTemplate_d26a60323e655b6622abb1ec02c3c0115400b64e365a5eb4b995c2b99e2e95ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 60, "if" => 61, "block" => 90);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
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

        // line 59
        echo "<!-- Header --> 
";
        // line 60
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : (""));
        // line 61
        echo "  ";
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()))) {
            // line 62
            echo "    ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array())) {
                // line 63
                echo "     <nav class=\"navbar navbar-default header_aera affix-top\">
         <div class=\"container m-s\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"col-md-4 p0\">
               <div class=\"navbar-header\">
                  <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#min_navbar\">
                     <span class=\"sr-only\">Toggle navigation</span>
                     <span class=\"icon-bar\"></span>
                     <span class=\"icon-bar\"></span>
                     <span class=\"icon-bar\"></span>
                  </button>
                  ";
                // line 74
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
                echo "
               </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"col-md-8 p0\">
               <div class=\"collapse navbar-collapse\" id=\"min_navbar\">
                  ";
                // line 80
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
                echo "
               </div>
               <!-- /.navbar-collapse -->
            </div>
         </div>
         <!-- /.container -->
      </nav>
    ";
            }
            // line 87
            echo "  
  ";
        }
        // line 90
        $this->displayBlock('main', $context, $blocks);
        // line 143
        echo "<!--Call to Action Section -->
<div class=\"our_partners_area bg-gray\">
         <div class=\"book_now_aera \">
            <div class=\"container\">
               <div class=\"row book_now\">
                  <div class=\"col-md-5 booking_text\">
                     <h4>";
        // line 149
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</h4>
                     <p>";
        // line 150
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["call_us_description"]) ? $context["call_us_description"] : null), "html", null, true));
        echo "</p>
                  </div>
                  <div class=\"col-md-7 p0 book_bottun\">
                     <div class=\"col-md-7\">
                       
                     </div>
                     <div class=\"col-md-5\">
                        <div class=\"top-banner wow fadeInRight text-left\" style=\"visibility: visible; animation-name: fadeInRight;\">
                           <a id=\"#services\" href=\"";
        // line 158
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["button_link"]) ? $context["button_link"] : null), "html", null, true));
        echo "\" class=\"btn btn-primary  wow fadeInUp  js-scroll-trigger\" data-wow-delay=\"1s\" style=\"visibility: visible; animation-delay: 1s; animation-name: fadeInUp;\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["button_text"]) ? $context["button_text"] : null), "html", null, true));
        echo "</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

<!-- Footer Section -->
<div class=\"our_footer_area\">
   <div class=\"book_now_aera \">
      <div class=\"container wow fadeInUp\">
         <div class=\"row book_now\">
            <div class=\"col-md-4\">
               <div class=\"\">
               ";
        // line 174
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_about", array()), "html", null, true));
        echo "
               </div>   
               <div class=\"bigpixi-footer-social\">
                  <a href=\"";
        // line 177
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["facebook"]) ? $context["facebook"] : null), "html", null, true));
        echo "\" target=\"_blank\"><i id=\"social-fb\" class=\"fa fa-facebook-square fa-3x social\"></i></a>
                  <a href=\"";
        // line 178
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["twitter"]) ? $context["twitter"] : null), "html", null, true));
        echo "\" target=\"_blank\"><i id=\"social-tw\" class=\"fa fa-twitter-square fa-3x social\"></i></a>
                  <a href=\"";
        // line 179
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["instagram"]) ? $context["instagram"] : null), "html", null, true));
        echo "\" target=\"_blank\"><i id=\"social-em\" class=\"fa fa-instagram fa-3x social\"></i></a>
               </div>
            </div>
            <div class=\"col-md-1\">
            </div>
            <div class=\"col-md-3\">
               ";
        // line 185
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
            </div>
            <div class=\"col-md-4\">
               <ul class=\"location\">
                  <li class=\"footer-left-h\"><i class=\"fa fa-map-marker\"></i>";
        // line 189
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["address"]) ? $context["address"] : null), "html", null, true));
        echo "</li>
                  <li class=\"footer-left-h\"><i class=\"fa fa-phone\"></i>Call Us <br>";
        // line 190
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["phone_number"]) ? $context["phone_number"] : null), "html", null, true));
        echo "
                  </li>
                  <li class=\"footer-left-h\"><i class=\"fa fa-envelope-o\"></i>Email<br>
                     <a href=\"mailto:";
        // line 193
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true));
        echo "\"> ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true));
        echo " </a>
                  </li>
               </ul>
            </div>
             <div class=\"col-md-12\">
              <p class=\"color-gray\">@2018. <a href=\"\">YG Iconic</a> All Rights Reserved. Design by <a href=\"https://www.navthemes.com\">NavThemes</a></p>
               <p class=\"color-gray\">Theme By <a href=\"https://www.drupaldeveloperstudio.com\">Drupal Developers Studio</a>. A Division of <a href=\"www.youngglobes.com\">Young Globes</a></p>
            </div>
         </div>
      </div>
   </div>
</div>
";
    }

    // line 90
    public function block_main($context, array $blocks = array())
    {
        // line 91
        echo "<div role=\"main\" class=\"js-quickedit-main-content\">
  <div class=\"\">
    
    ";
        // line 95
        echo "    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 96
            echo "      ";
            $this->displayBlock('header', $context, $blocks);
            // line 99
            echo "    ";
        }
        // line 100
        echo "    ";
        // line 101
        echo "    ";
        // line 102
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 103
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("") : ("")), 1 => ((($this->getAttribute(        // line 104
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("") : ("")), 2 => ((($this->getAttribute(        // line 105
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 106
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("") : ("")));
        // line 109
        echo "    <section ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">   
      ";
        // line 111
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 112
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 115
            echo "      ";
        }
        // line 116
        echo "      ";
        // line 117
        echo "        ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 118
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 121
            echo "        ";
        }
        // line 122
        echo "      ";
        // line 123
        echo "        ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 124
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 127
            echo "        ";
        }
        // line 128
        echo "      ";
        // line 129
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 130
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 133
            echo "        ";
        }
        // line 134
        echo "      ";
        // line 135
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 139
        echo "      </section>
   </div>
   </div>
";
    }

    // line 96
    public function block_header($context, array $blocks = array())
    {
        // line 97
        echo "        <div class=\"col-sm-12\" role=\"heading\"></div>
      ";
    }

    // line 112
    public function block_highlighted($context, array $blocks = array())
    {
        // line 113
        echo "          <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
        ";
    }

    // line 118
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 119
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
          ";
    }

    // line 124
    public function block_action_links($context, array $blocks = array())
    {
        // line 125
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
          ";
    }

    // line 130
    public function block_help($context, array $blocks = array())
    {
        // line 131
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 135
    public function block_content($context, array $blocks = array())
    {
        // line 136
        echo "          <a id=\"main-content\"></a>
          ";
        // line 137
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "themes/yg_iconic/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 137,  340 => 136,  337 => 135,  330 => 131,  327 => 130,  320 => 125,  317 => 124,  310 => 119,  307 => 118,  300 => 113,  297 => 112,  292 => 97,  289 => 96,  282 => 139,  279 => 135,  277 => 134,  274 => 133,  271 => 130,  268 => 129,  266 => 128,  263 => 127,  260 => 124,  257 => 123,  255 => 122,  252 => 121,  249 => 118,  246 => 117,  244 => 116,  241 => 115,  238 => 112,  235 => 111,  230 => 109,  228 => 106,  227 => 105,  226 => 104,  225 => 103,  224 => 102,  222 => 101,  220 => 100,  217 => 99,  214 => 96,  211 => 95,  206 => 91,  203 => 90,  184 => 193,  178 => 190,  174 => 189,  167 => 185,  158 => 179,  154 => 178,  150 => 177,  144 => 174,  123 => 158,  112 => 150,  108 => 149,  100 => 143,  98 => 90,  94 => 87,  83 => 80,  74 => 74,  61 => 63,  58 => 62,  55 => 61,  53 => 60,  50 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/yg_iconic/templates/page--front.html.twig", "/var/www/html/yg_iconic/themes/yg_iconic/templates/page--front.html.twig");
    }
}
