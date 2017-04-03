<?php

/* blog/about.html.twig */
class __TwigTemplate_34b5b06b86955dabe022b207221f2db1228c2e538f6dfee7a16461feba726f76 extends Twig_Template
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
        echo "<div class=\"section about\">
    <div class=\"well well-lg\">
        <p>
            ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.app_description");
        echo "
        </p>
        <p>
            ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.more_information");
        echo "
        </p>
    </div>
</div>

";
        // line 15
        echo "<!-- Fragment rendered on ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "long", "long", null, "UTC"), "html", null, true);
        echo " -->
";
    }

    public function getTemplateName()
    {
        return "blog/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  30 => 7,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "blog/about.html.twig", "/var/www/html/app/Resources/views/blog/about.html.twig");
    }
}
