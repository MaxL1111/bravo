<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_81342f95580db9b86fd3773213eeeffd7bca35dc1626df936a1790a9a19c6cf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b294de3e146b10476d3bfa5251d70d63479f8072ca7687c70cbc368df2b3dcb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b294de3e146b10476d3bfa5251d70d63479f8072ca7687c70cbc368df2b3dcb9->enter($__internal_b294de3e146b10476d3bfa5251d70d63479f8072ca7687c70cbc368df2b3dcb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2ed47d8025966cea6178627fa27137318d729b0e140912db75dee3b4ee0a561f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed47d8025966cea6178627fa27137318d729b0e140912db75dee3b4ee0a561f->enter($__internal_2ed47d8025966cea6178627fa27137318d729b0e140912db75dee3b4ee0a561f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b294de3e146b10476d3bfa5251d70d63479f8072ca7687c70cbc368df2b3dcb9->leave($__internal_b294de3e146b10476d3bfa5251d70d63479f8072ca7687c70cbc368df2b3dcb9_prof);

        
        $__internal_2ed47d8025966cea6178627fa27137318d729b0e140912db75dee3b4ee0a561f->leave($__internal_2ed47d8025966cea6178627fa27137318d729b0e140912db75dee3b4ee0a561f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ee7e5db1e3feba91c6f1a2dfa04acfc069783590c757c54dfbac86afb0e7c314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee7e5db1e3feba91c6f1a2dfa04acfc069783590c757c54dfbac86afb0e7c314->enter($__internal_ee7e5db1e3feba91c6f1a2dfa04acfc069783590c757c54dfbac86afb0e7c314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d121cfab6621e4bd01389eb1900e45e93127d87a63d6bd38eb4574dcabc683aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d121cfab6621e4bd01389eb1900e45e93127d87a63d6bd38eb4574dcabc683aa->enter($__internal_d121cfab6621e4bd01389eb1900e45e93127d87a63d6bd38eb4574dcabc683aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d121cfab6621e4bd01389eb1900e45e93127d87a63d6bd38eb4574dcabc683aa->leave($__internal_d121cfab6621e4bd01389eb1900e45e93127d87a63d6bd38eb4574dcabc683aa_prof);

        
        $__internal_ee7e5db1e3feba91c6f1a2dfa04acfc069783590c757c54dfbac86afb0e7c314->leave($__internal_ee7e5db1e3feba91c6f1a2dfa04acfc069783590c757c54dfbac86afb0e7c314_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d254d2aea30bb3af52dde3daa577c43cdfb31ff36d1c87896279c16796e94fc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d254d2aea30bb3af52dde3daa577c43cdfb31ff36d1c87896279c16796e94fc2->enter($__internal_d254d2aea30bb3af52dde3daa577c43cdfb31ff36d1c87896279c16796e94fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_78ad20d1c1c1850e2ab393b9323620e20cd372927540c3c4dc7093958a00f62a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ad20d1c1c1850e2ab393b9323620e20cd372927540c3c4dc7093958a00f62a->enter($__internal_78ad20d1c1c1850e2ab393b9323620e20cd372927540c3c4dc7093958a00f62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_78ad20d1c1c1850e2ab393b9323620e20cd372927540c3c4dc7093958a00f62a->leave($__internal_78ad20d1c1c1850e2ab393b9323620e20cd372927540c3c4dc7093958a00f62a_prof);

        
        $__internal_d254d2aea30bb3af52dde3daa577c43cdfb31ff36d1c87896279c16796e94fc2->leave($__internal_d254d2aea30bb3af52dde3daa577c43cdfb31ff36d1c87896279c16796e94fc2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b641f981516f7de8fee35307e07ea65f0bff56c2764e7cca62760c638ded89b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b641f981516f7de8fee35307e07ea65f0bff56c2764e7cca62760c638ded89b->enter($__internal_7b641f981516f7de8fee35307e07ea65f0bff56c2764e7cca62760c638ded89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_29cb9f8b8834f7ec1df2f24b48ea3bece59ab8835e0430f0a3b6eab0ccd107ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29cb9f8b8834f7ec1df2f24b48ea3bece59ab8835e0430f0a3b6eab0ccd107ae->enter($__internal_29cb9f8b8834f7ec1df2f24b48ea3bece59ab8835e0430f0a3b6eab0ccd107ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_29cb9f8b8834f7ec1df2f24b48ea3bece59ab8835e0430f0a3b6eab0ccd107ae->leave($__internal_29cb9f8b8834f7ec1df2f24b48ea3bece59ab8835e0430f0a3b6eab0ccd107ae_prof);

        
        $__internal_7b641f981516f7de8fee35307e07ea65f0bff56c2764e7cca62760c638ded89b->leave($__internal_7b641f981516f7de8fee35307e07ea65f0bff56c2764e7cca62760c638ded89b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\OpenServer\\domains\\symfony.local\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
