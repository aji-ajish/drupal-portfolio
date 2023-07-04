<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/portfolio/templates/layout/html.html.twig */
class __TwigTemplate_9440adf92d4ca1a4748e473a1ee3dd98449dda78a93df6b764ae255d5ee8efb9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "<!DOCTYPE html>
<html";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 29, $this->source), "html", null, true);
        echo ">

  <head>
    ";
        // line 33
        echo "
      ";
        // line 34
        $this->loadTemplate("themes/custom/portfolio/templates/components/meta.html.twig", "themes/custom/portfolio/templates/layout/html.html.twig", 34)->display($context);
        // line 35
        echo "

      <css-placeholder token=\"";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 37, $this->source), "html", null, true);
        echo "\">
        <js-placeholder token=\"";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 38, $this->source), "html", null, true);
        echo "\">

          ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["gtm_loop"] ?? null), "fields", [], "any", false, false, true, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 41
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "field_seo_script", [], "any", false, false, true, 41), 0, [], "any", false, false, true, 41), "value", [], "any", false, false, true, 41), 41, $this->source));
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "  </head>
  <body";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 44, $this->source), "html", null, true);
        echo ">
    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["gtm_loop"] ?? null), "fields", [], "any", false, false, true, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 46
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "field_seo_non_script", [], "any", false, false, true, 46), 0, [], "any", false, false, true, 46), "value", [], "any", false, false, true, 46), 46, $this->source));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    ";
        // line 52
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 55, $this->source), "html", null, true);
        echo "
    ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 56, $this->source), "html", null, true);
        echo "
    ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 57, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 58, $this->source), "html", null, true);
        echo "\">
      </body>

      </html>";
    }

    public function getTemplateName()
    {
        return "themes/custom/portfolio/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 58,  117 => 57,  113 => 56,  109 => 55,  104 => 53,  101 => 52,  99 => 48,  90 => 46,  86 => 45,  82 => 44,  79 => 43,  70 => 41,  66 => 40,  61 => 38,  57 => 37,  53 => 35,  51 => 34,  48 => 33,  42 => 29,  39 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/portfolio/templates/layout/html.html.twig", "/opt/lampp/htdocs/php/ajish-portfolio/themes/custom/portfolio/templates/layout/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 34, "for" => 40);
        static $filters = array("escape" => 29, "raw" => 41, "t" => 53);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'for'],
                ['escape', 'raw', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
