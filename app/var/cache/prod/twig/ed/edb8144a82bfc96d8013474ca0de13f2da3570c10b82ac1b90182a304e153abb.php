<?php

/* blog/_rss.html.twig */
class __TwigTemplate_fadc4ce70a2353e90e17165c3663058a3c9ec99a84ba00a3c1c11bc7d5a6b39c extends Twig_Template
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
        // line 1
        echo "<div class=\"section rss\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_rss");
        echo "\">
        <i class=\"fa fa-rss\" aria-hidden=\"true\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.rss"), "html", null, true);
        echo "
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "blog/_rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "blog/_rss.html.twig", "/var/www/html/app/Resources/views/blog/_rss.html.twig");
    }
}
