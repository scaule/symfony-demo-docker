<?php

/* form/fields.html.twig */
class __TwigTemplate_4bde17029ffcb7c31e6e7acd75af0472ead913d93ecc070b28fca4cbb21ddea4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
            'tags_input_widget' => array($this, 'block_tags_input_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('tags_input_widget', $context, $blocks);
    }

    // line 10
    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        // line 11
        echo "    <div class=\"input-group date\" data-toggle=\"datetimepicker\">
        ";
        // line 12
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
        <span class=\"input-group-addon\">
            <span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>
        </span>
    </div>
";
    }

    // line 19
    public function block_tags_input_widget($context, array $blocks = array())
    {
        // line 20
        echo "    <div class=\"input-group\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("attr" => array("data-toggle" => "tagsinput", "data-tags" => twig_jsonencode_filter(($context["tags"] ?? null)))));
        echo "
        <span class=\"input-group-addon\">
            <span class=\"fa fa-tags\" aria-hidden=\"true\"></span>
        </span>
    </div>
";
    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 21,  52 => 20,  49 => 19,  39 => 12,  36 => 11,  33 => 10,  29 => 19,  26 => 18,  24 => 10,  21 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/fields.html.twig", "/var/www/html/app/Resources/views/form/fields.html.twig");
    }
}
