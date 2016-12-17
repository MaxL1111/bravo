<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_ac06936120fd782bbed5946e086c7b344c7e5959d7b4f07268a0c009a4b005c1 extends Twig_Template
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
        $__internal_09853a1dc0b0330c09b8c68db4b62d7a8f5d14a462eff8c546088da6662d17a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09853a1dc0b0330c09b8c68db4b62d7a8f5d14a462eff8c546088da6662d17a5->enter($__internal_09853a1dc0b0330c09b8c68db4b62d7a8f5d14a462eff8c546088da6662d17a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_bf233aee9af0aee086785979aab5e2f1b8b33406bfddea9ba0a92694c864bab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf233aee9af0aee086785979aab5e2f1b8b33406bfddea9ba0a92694c864bab1->enter($__internal_bf233aee9af0aee086785979aab5e2f1b8b33406bfddea9ba0a92694c864bab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_09853a1dc0b0330c09b8c68db4b62d7a8f5d14a462eff8c546088da6662d17a5->leave($__internal_09853a1dc0b0330c09b8c68db4b62d7a8f5d14a462eff8c546088da6662d17a5_prof);

        
        $__internal_bf233aee9af0aee086785979aab5e2f1b8b33406bfddea9ba0a92694c864bab1->leave($__internal_bf233aee9af0aee086785979aab5e2f1b8b33406bfddea9ba0a92694c864bab1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\OpenServer\\domains\\symfony.local\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
