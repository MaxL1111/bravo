<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f35c0a75401817e2ac46083bd938c449f76e8beb1b9a936554d977a7f499590b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1af25f80ccd06e2e8b4aa03cc4e4c08565f2fca94b49498c5d4b88317e71b9fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1af25f80ccd06e2e8b4aa03cc4e4c08565f2fca94b49498c5d4b88317e71b9fd->enter($__internal_1af25f80ccd06e2e8b4aa03cc4e4c08565f2fca94b49498c5d4b88317e71b9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7ccf8ed9479bb299381a03129102ba57f71a91ae186f11caa95016d0d40021af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ccf8ed9479bb299381a03129102ba57f71a91ae186f11caa95016d0d40021af->enter($__internal_7ccf8ed9479bb299381a03129102ba57f71a91ae186f11caa95016d0d40021af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1af25f80ccd06e2e8b4aa03cc4e4c08565f2fca94b49498c5d4b88317e71b9fd->leave($__internal_1af25f80ccd06e2e8b4aa03cc4e4c08565f2fca94b49498c5d4b88317e71b9fd_prof);

        
        $__internal_7ccf8ed9479bb299381a03129102ba57f71a91ae186f11caa95016d0d40021af->leave($__internal_7ccf8ed9479bb299381a03129102ba57f71a91ae186f11caa95016d0d40021af_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_11c8d157ad53abed592c8ca1f4bd3b7ab8ea9263ac5ec3b453a55db81e37b51a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c8d157ad53abed592c8ca1f4bd3b7ab8ea9263ac5ec3b453a55db81e37b51a->enter($__internal_11c8d157ad53abed592c8ca1f4bd3b7ab8ea9263ac5ec3b453a55db81e37b51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ff16515eb832c312c442c4e424e05398c633c363f96b1bd91b21b0e01593538a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff16515eb832c312c442c4e424e05398c633c363f96b1bd91b21b0e01593538a->enter($__internal_ff16515eb832c312c442c4e424e05398c633c363f96b1bd91b21b0e01593538a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ff16515eb832c312c442c4e424e05398c633c363f96b1bd91b21b0e01593538a->leave($__internal_ff16515eb832c312c442c4e424e05398c633c363f96b1bd91b21b0e01593538a_prof);

        
        $__internal_11c8d157ad53abed592c8ca1f4bd3b7ab8ea9263ac5ec3b453a55db81e37b51a->leave($__internal_11c8d157ad53abed592c8ca1f4bd3b7ab8ea9263ac5ec3b453a55db81e37b51a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_446e93ea54c3d0ad9f718a5851b44eac28a1e6c68335a395e8b0865b5ae83fb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_446e93ea54c3d0ad9f718a5851b44eac28a1e6c68335a395e8b0865b5ae83fb0->enter($__internal_446e93ea54c3d0ad9f718a5851b44eac28a1e6c68335a395e8b0865b5ae83fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0dd1e9e708e7466d271e2f6b5005d429b5647dc57230802d34f5e7a8a3df90cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd1e9e708e7466d271e2f6b5005d429b5647dc57230802d34f5e7a8a3df90cd->enter($__internal_0dd1e9e708e7466d271e2f6b5005d429b5647dc57230802d34f5e7a8a3df90cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0dd1e9e708e7466d271e2f6b5005d429b5647dc57230802d34f5e7a8a3df90cd->leave($__internal_0dd1e9e708e7466d271e2f6b5005d429b5647dc57230802d34f5e7a8a3df90cd_prof);

        
        $__internal_446e93ea54c3d0ad9f718a5851b44eac28a1e6c68335a395e8b0865b5ae83fb0->leave($__internal_446e93ea54c3d0ad9f718a5851b44eac28a1e6c68335a395e8b0865b5ae83fb0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d2ae905472aa6479ed82e4923d64cacfd3cb6143b2537f9fbc6b1ab869d2b88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d2ae905472aa6479ed82e4923d64cacfd3cb6143b2537f9fbc6b1ab869d2b88->enter($__internal_6d2ae905472aa6479ed82e4923d64cacfd3cb6143b2537f9fbc6b1ab869d2b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3ba77f54142110443f1b7561fd1d54b141fbde41633486f4b535488d4252a29a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba77f54142110443f1b7561fd1d54b141fbde41633486f4b535488d4252a29a->enter($__internal_3ba77f54142110443f1b7561fd1d54b141fbde41633486f4b535488d4252a29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3ba77f54142110443f1b7561fd1d54b141fbde41633486f4b535488d4252a29a->leave($__internal_3ba77f54142110443f1b7561fd1d54b141fbde41633486f4b535488d4252a29a_prof);

        
        $__internal_6d2ae905472aa6479ed82e4923d64cacfd3cb6143b2537f9fbc6b1ab869d2b88->leave($__internal_6d2ae905472aa6479ed82e4923d64cacfd3cb6143b2537f9fbc6b1ab869d2b88_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\OpenServer\\domains\\symfony.local\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
