<?php

/* blog/_comment_form.html.twig */
class __TwigTemplate_fb2062e6868a42cbca4a69d5f217b6746742453d3251464710e1125a15b98239 extends Twig_Template
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
        // line 8
        echo "
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "POST", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_new", array("postSlug" => $this->getAttribute(($context["post"] ?? null), "slug", array())))));
        echo "
    ";
        // line 15
        echo "
    <fieldset>
        <legend>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.add_comment"), "html", null, true);
        echo "</legend>

        ";
        // line 20
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

        <div class=\"form-group ";
        // line 22
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "content", array()), "vars", array()), "valid", array())) {
            echo "has-error";
        }
        echo "\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "content", array()), 'label', array("label_attr" => array("class" => "hidden"), "label" => "label.content"));
        echo "

            ";
        // line 26
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "content", array()), 'errors');
        echo "

            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "content", array()), 'widget', array("attr" => array("rows" => 10)));
        echo "
        </div>

        <div class=\"form-group\">
            <button class=\"btn btn-primary pull-right\" type=\"submit\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.publish_comment"), "html", null, true);
        echo "</button>
        </div>
    </fieldset>
";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "blog/_comment_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 35,  65 => 32,  58 => 28,  52 => 26,  47 => 23,  41 => 22,  35 => 20,  30 => 17,  26 => 15,  22 => 9,  19 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "blog/_comment_form.html.twig", "/var/www/html/app/Resources/views/blog/_comment_form.html.twig");
    }
}
