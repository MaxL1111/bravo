<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c20f9b35e7f1bd90d04a0b1e2ca9149ff52216f634b3fe573a62e59be30d861f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa9924b1673a6f871bb74f0bf935aa4dc3a7cba86f29665611205225f2a9f28b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa9924b1673a6f871bb74f0bf935aa4dc3a7cba86f29665611205225f2a9f28b->enter($__internal_aa9924b1673a6f871bb74f0bf935aa4dc3a7cba86f29665611205225f2a9f28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4c94e8360c438f1c7aedac61f7918447e5228ab7e7dbdc52a758b2211a98f134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c94e8360c438f1c7aedac61f7918447e5228ab7e7dbdc52a758b2211a98f134->enter($__internal_4c94e8360c438f1c7aedac61f7918447e5228ab7e7dbdc52a758b2211a98f134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa9924b1673a6f871bb74f0bf935aa4dc3a7cba86f29665611205225f2a9f28b->leave($__internal_aa9924b1673a6f871bb74f0bf935aa4dc3a7cba86f29665611205225f2a9f28b_prof);

        
        $__internal_4c94e8360c438f1c7aedac61f7918447e5228ab7e7dbdc52a758b2211a98f134->leave($__internal_4c94e8360c438f1c7aedac61f7918447e5228ab7e7dbdc52a758b2211a98f134_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_09c959c03802c56bea073719a9233fc769770f505dbdee97e61c42f875964dff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c959c03802c56bea073719a9233fc769770f505dbdee97e61c42f875964dff->enter($__internal_09c959c03802c56bea073719a9233fc769770f505dbdee97e61c42f875964dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cd67763e016d6b0275440b2db469dd698962627df8f00abf61f0134f5aa091a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd67763e016d6b0275440b2db469dd698962627df8f00abf61f0134f5aa091a9->enter($__internal_cd67763e016d6b0275440b2db469dd698962627df8f00abf61f0134f5aa091a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_cd67763e016d6b0275440b2db469dd698962627df8f00abf61f0134f5aa091a9->leave($__internal_cd67763e016d6b0275440b2db469dd698962627df8f00abf61f0134f5aa091a9_prof);

        
        $__internal_09c959c03802c56bea073719a9233fc769770f505dbdee97e61c42f875964dff->leave($__internal_09c959c03802c56bea073719a9233fc769770f505dbdee97e61c42f875964dff_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_774b05277b0580e5ea5d8e0a38b32002239902aa9e634edc624ddb3d888177b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_774b05277b0580e5ea5d8e0a38b32002239902aa9e634edc624ddb3d888177b2->enter($__internal_774b05277b0580e5ea5d8e0a38b32002239902aa9e634edc624ddb3d888177b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b1f26756d233eb313734f07d1d3aa6b959f5b2f7f135cd40aa71479a2407509e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1f26756d233eb313734f07d1d3aa6b959f5b2f7f135cd40aa71479a2407509e->enter($__internal_b1f26756d233eb313734f07d1d3aa6b959f5b2f7f135cd40aa71479a2407509e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b1f26756d233eb313734f07d1d3aa6b959f5b2f7f135cd40aa71479a2407509e->leave($__internal_b1f26756d233eb313734f07d1d3aa6b959f5b2f7f135cd40aa71479a2407509e_prof);

        
        $__internal_774b05277b0580e5ea5d8e0a38b32002239902aa9e634edc624ddb3d888177b2->leave($__internal_774b05277b0580e5ea5d8e0a38b32002239902aa9e634edc624ddb3d888177b2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6208fbc69acecf46fe0e7dbaa7041a4038f0cbb15df721c6f44112f14b2b4b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6208fbc69acecf46fe0e7dbaa7041a4038f0cbb15df721c6f44112f14b2b4b9f->enter($__internal_6208fbc69acecf46fe0e7dbaa7041a4038f0cbb15df721c6f44112f14b2b4b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_56e144c52ae5efbe07f7c0f8c23121a3c30fae4162a3a36fca4511f15bf28880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e144c52ae5efbe07f7c0f8c23121a3c30fae4162a3a36fca4511f15bf28880->enter($__internal_56e144c52ae5efbe07f7c0f8c23121a3c30fae4162a3a36fca4511f15bf28880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_56e144c52ae5efbe07f7c0f8c23121a3c30fae4162a3a36fca4511f15bf28880->leave($__internal_56e144c52ae5efbe07f7c0f8c23121a3c30fae4162a3a36fca4511f15bf28880_prof);

        
        $__internal_6208fbc69acecf46fe0e7dbaa7041a4038f0cbb15df721c6f44112f14b2b4b9f->leave($__internal_6208fbc69acecf46fe0e7dbaa7041a4038f0cbb15df721c6f44112f14b2b4b9f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\OpenServer\\domains\\symfony.local\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
