<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7717a8be4f2293b9a0ea384e722038142b533323ab089d4c037089667bce5d32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da1c608dc9357493466aa682cf629190d8cc65b5ab6b78d0975486bfaa97bd6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da1c608dc9357493466aa682cf629190d8cc65b5ab6b78d0975486bfaa97bd6e->enter($__internal_da1c608dc9357493466aa682cf629190d8cc65b5ab6b78d0975486bfaa97bd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b4a519f7eca11f9ea1baef30b775a14e7dee3b679fdbe0927d6ebc69b8e80301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a519f7eca11f9ea1baef30b775a14e7dee3b679fdbe0927d6ebc69b8e80301->enter($__internal_b4a519f7eca11f9ea1baef30b775a14e7dee3b679fdbe0927d6ebc69b8e80301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da1c608dc9357493466aa682cf629190d8cc65b5ab6b78d0975486bfaa97bd6e->leave($__internal_da1c608dc9357493466aa682cf629190d8cc65b5ab6b78d0975486bfaa97bd6e_prof);

        
        $__internal_b4a519f7eca11f9ea1baef30b775a14e7dee3b679fdbe0927d6ebc69b8e80301->leave($__internal_b4a519f7eca11f9ea1baef30b775a14e7dee3b679fdbe0927d6ebc69b8e80301_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a93376df9285fc6c120c8c83377ed4069ec33b37ae3d8eaac3a45ff81276af22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a93376df9285fc6c120c8c83377ed4069ec33b37ae3d8eaac3a45ff81276af22->enter($__internal_a93376df9285fc6c120c8c83377ed4069ec33b37ae3d8eaac3a45ff81276af22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fc3462b9236cfc9511b12b0e261a7b6822ce42fd49cab21269963afef285c6d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3462b9236cfc9511b12b0e261a7b6822ce42fd49cab21269963afef285c6d1->enter($__internal_fc3462b9236cfc9511b12b0e261a7b6822ce42fd49cab21269963afef285c6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_fc3462b9236cfc9511b12b0e261a7b6822ce42fd49cab21269963afef285c6d1->leave($__internal_fc3462b9236cfc9511b12b0e261a7b6822ce42fd49cab21269963afef285c6d1_prof);

        
        $__internal_a93376df9285fc6c120c8c83377ed4069ec33b37ae3d8eaac3a45ff81276af22->leave($__internal_a93376df9285fc6c120c8c83377ed4069ec33b37ae3d8eaac3a45ff81276af22_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\OpenServer\\domains\\symfony.local\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
