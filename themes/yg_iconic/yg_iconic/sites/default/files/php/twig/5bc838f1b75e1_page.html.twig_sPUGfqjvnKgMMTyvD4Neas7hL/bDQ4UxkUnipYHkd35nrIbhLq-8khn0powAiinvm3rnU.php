<?php

/* themes/yg_iconic/templates/page.html.twig */
class __TwigTemplate_2fceb409062bc82399e4d97cc328f61d82711df01b20d704b36190e715228a93 extends Twig_Template
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
        $tags = array("set" => 60, "if" => 61, "block" => 111);
        $filters = array("render" => 91);
        $functions = array("url" => 90);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('render'),
                array('url')
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
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : (""));
        // line 61
        echo "  ";
        if (($this->getAttribute(($context["page"] ?? null), "navigation", array()) || $this->getAttribute(($context["page"] ?? null), "primary_menu", array()))) {
            // line 62
            echo "    ";
            if ($this->getAttribute(($context["page"] ?? null), "navigation", array())) {
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
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
                echo "
               </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"col-md-8 p0\">
               <div class=\"collapse navbar-collapse\" id=\"min_navbar\">
                  ";
                // line 80
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
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
        // line 89
        echo "  <!-- Banner section -->
";
        // line 90
        $context["url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<current>");
        // line 91
        echo "  ";
        if ((twig_in_filter("comment", $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["url"] ?? null)))) || twig_in_filter("user", $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["url"] ?? null)))))) {
            // line 92
            echo "<div class=\"bg-grediunt\">
   <div class=\"bg-banner-img clip-ellipse\" style=\"background-image: url(/yg_iconic/themes/yg_iconic/assets/images/banner-img.jpg);\">
      <div class=\"ovrllay\">
         <section id=\"banner\" class=\" mb-90\">
            <div class=\"container \">
               <div class=\"row\">
                  <!-- #banner-text start -->            
                  <div id=\"banner-text\" class=\"col-md-12 text-c text-center \">
                     <h5 class=\"wow fadeInUp main-h\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-delay: 0.2s;\">";
            // line 100
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "title", array()), "html", null, true));
            echo "</h5>
                  </div>
                  <!-- /#banner-text End -->
               </div>
            </div>
         </section>
      </div>
   </div>
</div> 
";
        }
        // line 111
        $this->displayBlock('main', $context, $blocks);
        // line 164
        echo "<!--Call to Action Section -->
<div class=\"our_partners_area bg-gray\">
         <div class=\"book_now_aera \">
            <div class=\"container\">
               <div class=\"row book_now\">
                  <div class=\"col-md-5 booking_text\">
                     <h4>";
        // line 170
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h4>
                     <p>";
        // line 171
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["call_us_description"] ?? null), "html", null, true));
        echo "</p>
                  </div>
                  <div class=\"col-md-7 p0 book_bottun\">
                     <div class=\"col-md-7\">
                       
                     </div>
                     <div class=\"col-md-5\">
                        <div class=\"top-banner wow fadeInRight text-left\" style=\"visibility: visible; animation-name: fadeInRight;\">
                           <a id=\"#services\" href=\"";
        // line 179
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["button_link"] ?? null), "html", null, true));
        echo "\" class=\"btn btn-primary  wow fadeInUp  js-scroll-trigger\" data-wow-delay=\"1s\" style=\"visibility: visible; animation-delay: 1s; animation-name: fadeInUp;\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["button_text"] ?? null), "html", null, true));
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
        // line 195
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_about", array()), "html", null, true));
        echo "
               </div>   
               <div class=\"bigpixi-footer-social\">
                  <a href=\"";
        // line 198
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["facebook"] ?? null), "html", null, true));
        echo "\" target=\"_blank\"><i id=\"social-fb\" class=\"fa fa-facebook-square fa-3x social\"></i></a>
                  <a href=\"";
        // line 199
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["twitter"] ?? null), "html", null, true));
        echo "\" target=\"_blank\"><i id=\"social-tw\" class=\"fa fa-twitter-square fa-3x social\"></i></a>
                  <a href=\"";
        // line 200
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["instagram"] ?? null), "html", null, true));
        echo "\" target=\"_blank\"><i id=\"social-em\" class=\"fa fa-instagram fa-3x social\"></i></a>
               </div>
            </div>
            <div class=\"col-md-1\">
            </div>
            <div class=\"col-md-3\">
               ";
        // line 206
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
            </div>
            <div class=\"col-md-4\">
               <ul class=\"location\">
                  <li class=\"footer-left-h\"><i class=\"fa fa-map-marker\"></i>";
        // line 210
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["address"] ?? null), "html", null, true));
        echo "</li>
                  <li class=\"footer-left-h\"><i class=\"fa fa-phone\"></i>Call Us <br>";
        // line 211
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["phone_number"] ?? null), "html", null, true));
        echo "
                  </li>
                  <li class=\"footer-left-h\"><i class=\"fa fa-envelope-o\"></i>Email<br>
                     <a href=\"mailto:";
        // line 214
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["email"] ?? null), "html", null, true));
        echo "\"> ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["email"] ?? null), "html", null, true));
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

    // line 111
    public function block_main($context, array $blocks = array())
    {
        // line 112
        echo "<div role=\"main\" class=\"js-quickedit-main-content\">
  <div class=\"\">
    
    ";
        // line 116
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 117
            echo "      ";
            $this->displayBlock('header', $context, $blocks);
            // line 120
            echo "    ";
        }
        // line 121
        echo "    ";
        // line 122
        echo "    ";
        // line 123
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 124
($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("") : ("")), 1 => ((($this->getAttribute(        // line 125
($context["page"] ?? null), "sidebar_first", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("") : ("")), 2 => ((($this->getAttribute(        // line 126
($context["page"] ?? null), "sidebar_second", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())))) ? ("") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 127
($context["page"] ?? null), "sidebar_first", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("") : ("")));
        // line 130
        echo "    <section ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">   
      ";
        // line 132
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 133
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 136
            echo "      ";
        }
        // line 137
        echo "      ";
        // line 138
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 139
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 142
            echo "        ";
        }
        // line 143
        echo "      ";
        // line 144
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 145
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 148
            echo "        ";
        }
        // line 149
        echo "      ";
        // line 150
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 151
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 154
            echo "        ";
        }
        // line 155
        echo "      ";
        // line 156
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 160
        echo "      </section>
   </div>
   </div>
";
    }

    // line 117
    public function block_header($context, array $blocks = array())
    {
        // line 118
        echo "        <div class=\"col-sm-12\" role=\"heading\"></div>
      ";
    }

    // line 133
    public function block_highlighted($context, array $blocks = array())
    {
        // line 134
        echo "          <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "</div>
        ";
    }

    // line 139
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 140
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["breadcrumb"] ?? null), "html", null, true));
        echo "
          ";
    }

    // line 145
    public function block_action_links($context, array $blocks = array())
    {
        // line 146
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
        echo "</ul>
          ";
    }

    // line 151
    public function block_help($context, array $blocks = array())
    {
        // line 152
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 156
    public function block_content($context, array $blocks = array())
    {
        // line 157
        echo "          <a id=\"main-content\"></a>
          ";
        // line 158
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "themes/yg_iconic/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 158,  371 => 157,  368 => 156,  361 => 152,  358 => 151,  351 => 146,  348 => 145,  341 => 140,  338 => 139,  331 => 134,  328 => 133,  323 => 118,  320 => 117,  313 => 160,  310 => 156,  308 => 155,  305 => 154,  302 => 151,  299 => 150,  297 => 149,  294 => 148,  291 => 145,  288 => 144,  286 => 143,  283 => 142,  280 => 139,  277 => 138,  275 => 137,  272 => 136,  269 => 133,  266 => 132,  261 => 130,  259 => 127,  258 => 126,  257 => 125,  256 => 124,  255 => 123,  253 => 122,  251 => 121,  248 => 120,  245 => 117,  242 => 116,  237 => 112,  234 => 111,  215 => 214,  209 => 211,  205 => 210,  198 => 206,  189 => 200,  185 => 199,  181 => 198,  175 => 195,  154 => 179,  143 => 171,  139 => 170,  131 => 164,  129 => 111,  116 => 100,  106 => 92,  103 => 91,  101 => 90,  98 => 89,  94 => 87,  83 => 80,  74 => 74,  61 => 63,  58 => 62,  55 => 61,  53 => 60,  50 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/yg_iconic/templates/page.html.twig", "/var/www/html/yg_iconic/themes/yg_iconic/templates/page.html.twig");
    }
}
