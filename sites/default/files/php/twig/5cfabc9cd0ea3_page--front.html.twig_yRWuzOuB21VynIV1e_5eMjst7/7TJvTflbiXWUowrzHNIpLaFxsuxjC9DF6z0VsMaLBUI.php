<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/yg_iconic/yg_iconic/themes/yg_iconic/templates/page--front.html.twig */
class __TwigTemplate_ac3056527b18268726a85cf92e5d423dd5336f4a52e13cf50e3c9d623912fc76 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'highlighted' => [$this, 'block_highlighted'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 60, "if" => 61, "block" => 90];
        $filters = ["escape" => 74];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 59
        echo "<!-- Header --> 
";
        // line 60
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : (""));
        // line 61
        echo "  ";
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "primary_menu", []))) {
            // line 62
            echo "    ";
            if ($this->getAttribute(($context["page"] ?? null), "navigation", [])) {
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
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
                echo "
               </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"col-md-8 p0\">
               <div class=\"collapse navbar-collapse\" id=\"min_navbar\">
                  ";
                // line 80
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
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
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h4>
                     <p>";
        // line 150
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["call_us_description"] ?? null)), "html", null, true);
        echo "</p>
                  </div>
                  <div class=\"col-md-7 p0 book_bottun\">
                     <div class=\"col-md-7\">
                       
                     </div>
                     <div class=\"col-md-5\">
                        <div class=\"top-banner wow fadeInRight text-left\" style=\"visibility: visible; animation-name: fadeInRight;\">
                           <a id=\"#services\" href=\"";
        // line 158
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_link"] ?? null)), "html", null, true);
        echo "\" class=\"btn btn-primary  wow fadeInUp  js-scroll-trigger\" data-wow-delay=\"1s\" style=\"visibility: visible; animation-delay: 1s; animation-name: fadeInUp;\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_text"] ?? null)), "html", null, true);
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
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_about", [])), "html", null, true);
        echo "
               </div>   
               <div class=\"bigpixi-footer-social\">
                  <a href=\"";
        // line 177
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null)), "html", null, true);
        echo "\" target=\"_blank\"><i id=\"social-fb\" class=\"fa fa-facebook-square fa-3x social\"></i></a>
                  <a href=\"";
        // line 178
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null)), "html", null, true);
        echo "\" target=\"_blank\"><i id=\"social-tw\" class=\"fa fa-twitter-square fa-3x social\"></i></a>
                  <a href=\"";
        // line 179
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram"] ?? null)), "html", null, true);
        echo "\" target=\"_blank\"><i id=\"social-em\" class=\"fa fa-instagram fa-3x social\"></i></a>
               </div>
            </div>
            <div class=\"col-md-1\">
            </div>
            <div class=\"col-md-3\">
               ";
        // line 185
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
            </div>
            <div class=\"col-md-4\">
               <ul class=\"location\">
                  <li class=\"footer-left-h\"><i class=\"fa fa-map-marker\"></i>";
        // line 189
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address"] ?? null)), "html", null, true);
        echo "</li>
                  <li class=\"footer-left-h\"><i class=\"fa fa-phone\"></i>Call Us <br>";
        // line 190
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone_number"] ?? null)), "html", null, true);
        echo "
                  </li>
                  <li class=\"footer-left-h\"><i class=\"fa fa-envelope-o\"></i>Email<br>
                     <a href=\"mailto:";
        // line 193
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null)), "html", null, true);
        echo "\"> ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null)), "html", null, true);
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
    public function block_main($context, array $blocks = [])
    {
        // line 91
        echo "<div role=\"main\" class=\"js-quickedit-main-content\">
  <div class=\"\">
    
    ";
        // line 95
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
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
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 103
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("") : ("")), 1 => ((($this->getAttribute(        // line 104
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("") : ("")), 2 => ((($this->getAttribute(        // line 105
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 106
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("") : (""))];
        // line 109
        echo "    <section ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">   
      ";
        // line 111
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
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
        if (($context["breadcrumb"] ?? null)) {
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
        if (($context["action_links"] ?? null)) {
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
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
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
    public function block_header($context, array $blocks = [])
    {
        // line 97
        echo "        <div class=\"col-sm-12\" role=\"heading\"></div>
      ";
    }

    // line 112
    public function block_highlighted($context, array $blocks = [])
    {
        // line 113
        echo "          <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
        ";
    }

    // line 118
    public function block_breadcrumb($context, array $blocks = [])
    {
        // line 119
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null)), "html", null, true);
        echo "
          ";
    }

    // line 124
    public function block_action_links($context, array $blocks = [])
    {
        // line 125
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
        echo "</ul>
          ";
    }

    // line 130
    public function block_help($context, array $blocks = [])
    {
        // line 131
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 135
    public function block_content($context, array $blocks = [])
    {
        // line 136
        echo "          <a id=\"main-content\"></a>
          ";
        // line 137
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "themes/yg_iconic/yg_iconic/themes/yg_iconic/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 137,  352 => 136,  349 => 135,  342 => 131,  339 => 130,  332 => 125,  329 => 124,  322 => 119,  319 => 118,  312 => 113,  309 => 112,  304 => 97,  301 => 96,  294 => 139,  291 => 135,  289 => 134,  286 => 133,  283 => 130,  280 => 129,  278 => 128,  275 => 127,  272 => 124,  269 => 123,  267 => 122,  264 => 121,  261 => 118,  258 => 117,  256 => 116,  253 => 115,  250 => 112,  247 => 111,  242 => 109,  240 => 106,  239 => 105,  238 => 104,  237 => 103,  236 => 102,  234 => 101,  232 => 100,  229 => 99,  226 => 96,  223 => 95,  218 => 91,  215 => 90,  196 => 193,  190 => 190,  186 => 189,  179 => 185,  170 => 179,  166 => 178,  162 => 177,  156 => 174,  135 => 158,  124 => 150,  120 => 149,  112 => 143,  110 => 90,  106 => 87,  95 => 80,  86 => 74,  73 => 63,  70 => 62,  67 => 61,  65 => 60,  62 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_iconic/yg_iconic/themes/yg_iconic/templates/page--front.html.twig", "/var/www/html/themes/yg_iconic/yg_iconic/themes/yg_iconic/templates/page--front.html.twig");
    }
}
