<?php

/* base.html.twig */
class __TwigTemplate_7f0cb43a19f1a3b2fb03e232dc75df7dcac9d6b0751565fb7a4ba6d7e4357a56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "locale", array()), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("rss.title"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_rss");
        echo "\">
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body id=\"";
        // line 25
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

        ";
        // line 27
        $this->displayBlock('header', $context, $blocks);
        // line 90
        echo "
        <div class=\"container body-container\">
            ";
        // line 92
        $this->displayBlock('body', $context, $blocks);
        // line 111
        echo "        </div>

        ";
        // line 113
        $this->displayBlock('footer', $context, $blocks);
        // line 138
        echo "
        ";
        // line 139
        $this->displayBlock('javascripts', $context, $blocks);
        // line 148
        echo "
        ";
        // line 152
        echo "        <!-- Page rendered on ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "long", "long", null, "UTC"), "html", null, true);
        echo " -->
    </body>
</html>
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony Demo application";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-flatly-3.3.7.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome-4.6.3.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-lato.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/highlight-solarized-light.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-tagsinput.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 25
    public function block_body_id($context, array $blocks = array())
    {
    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        // line 28
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                                Symfony Demo
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.toggle_nav"), "html", null, true);
        echo "</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">

                                ";
        // line 48
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 63
        echo "
                                ";
        // line 64
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 65
            echo "                                    <li>
                                        <a href=\"";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">
                                            <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> ";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.logout"), "html", null, true);
            echo "
                                        </a>
                                    </li>
                                ";
        }
        // line 71
        echo "
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" id=\"locales\">
                                        <i class=\"fa fa-globe\" aria-hidden=\"true\"></i>
                                        <span class=\"caret\"></span>
                                        <span class=\"sr-only\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.choose_language"), "html", null, true);
        echo "</span>
                                    </a>
                                    <ul class=\"dropdown-menu locales\" role=\"menu\" aria-labelledby=\"locales\">
                                        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\AppExtension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 80
            echo "                                            <li ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "locale", array()) == $this->getAttribute($context["locale"], "code", array()))) {
                echo "aria-checked=\"true\" class=\"active\"";
            } else {
                echo "aria-checked=\"false\"";
            }
            echo " role=\"menuitem\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route", 1 => "blog_index"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route_params", 1 => array()), "method"), array("_locale" => $this->getAttribute($context["locale"], "code", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["locale"], "name", array())), "html", null, true);
            echo "</a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        ";
    }

    // line 48
    public function block_header_navigation_links($context, array $blocks = array())
    {
        // line 49
        echo "                                    <li>
                                        <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">
                                            <i class=\"fa fa-home\" aria-hidden=\"true\"></i> ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.homepage"), "html", null, true);
        echo "
                                        </a>
                                    </li>

                                    ";
        // line 55
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 56
            echo "                                        <li>
                                            <a href=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_index");
            echo "\">
                                                <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> ";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.admin"), "html", null, true);
            echo "
                                            </a>
                                        </li>
                                    ";
        }
        // line 62
        echo "                                ";
    }

    // line 92
    public function block_body($context, array $blocks = array())
    {
        // line 93
        echo "                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        ";
        // line 95
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

                        ";
        // line 97
        $this->displayBlock('main', $context, $blocks);
        // line 98
        echo "                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        ";
        // line 101
        $this->displayBlock('sidebar', $context, $blocks);
        // line 108
        echo "                    </div>
                </div>
            ";
    }

    // line 97
    public function block_main($context, array $blocks = array())
    {
    }

    // line 101
    public function block_sidebar($context, array $blocks = array())
    {
        // line 102
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("esi", Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FrameworkBundle:Template:template", array("template" => "blog/about.html.twig", "sharedAge" => 600, "_locale" => $this->getAttribute($this->getAttribute(        // line 105
($context["app"] ?? null), "request", array()), "locale", array()))));
        // line 106
        echo "
                        ";
    }

    // line 113
    public function block_footer($context, array $blocks = array())
    {
        // line 114
        echo "            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; ";
        // line 118
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - The Symfony Project</p>
                            <p>";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mit_license"), "html", null, true);
        echo "</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\" title=\"Symfony Twitter\">
                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://www.facebook.com/SensioLabs\" title=\"SensioLabs Facebook\">
                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://symfony.com/blog/\" title=\"Symfony Blog\">
                                    <i class=\"fa fa-rss\" aria-hidden=\"true\"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        ";
    }

    // line 139
    public function block_javascripts($context, array $blocks = array())
    {
        // line 140
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-3.3.7.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/highlight.pack.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-tagsinput.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 146,  377 => 145,  373 => 144,  369 => 143,  365 => 142,  361 => 141,  356 => 140,  353 => 139,  330 => 119,  326 => 118,  320 => 114,  317 => 113,  312 => 106,  310 => 105,  308 => 102,  305 => 101,  300 => 97,  294 => 108,  292 => 101,  287 => 98,  285 => 97,  280 => 95,  276 => 93,  273 => 92,  269 => 62,  262 => 58,  258 => 57,  255 => 56,  253 => 55,  246 => 51,  242 => 50,  239 => 49,  236 => 48,  225 => 82,  208 => 80,  204 => 79,  198 => 76,  191 => 71,  184 => 67,  180 => 66,  177 => 65,  175 => 64,  172 => 63,  170 => 48,  158 => 39,  148 => 32,  142 => 28,  139 => 27,  134 => 25,  128 => 20,  124 => 19,  120 => 18,  116 => 17,  112 => 16,  108 => 15,  103 => 14,  100 => 13,  94 => 11,  85 => 152,  82 => 148,  80 => 139,  77 => 138,  75 => 113,  71 => 111,  69 => 92,  65 => 90,  63 => 27,  58 => 25,  51 => 22,  49 => 13,  43 => 12,  39 => 11,  32 => 7,  29 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/var/www/html/app/Resources/views/base.html.twig");
    }
}
