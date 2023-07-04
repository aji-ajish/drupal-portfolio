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

/* themes/custom/portfolio/templates/paragraphs/paragraph--about.html.twig */
class __TwigTemplate_9c4fa2cce5ef6e674053f6ca3321da596f633f4a40edd950c01dd93a0ba0b94f extends \Twig\Template
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
        // line 1
        echo "<main id=\"main\">

    <!-- ======= About Section ======= -->
    <section id=\"about\" class=\"about\">
        <div class=\"container\">

            <div class=\"section-title\">
                <h2>
                    ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 9), 0, [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "
                </h2>
                <p>
                    ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 12), 0, [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
                </p>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-4\" data-aos=\"fade-right\">
                    <img src=\"";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 18)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null), "entity", [], "any", false, false, true, 18), "uri", [], "any", false, false, true, 18), "value", [], "any", false, false, true, 18), 18, $this->source)), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                </div>
                    <div class=\"col-lg-8 pt-4 pt-lg-0 content\" data-aos=\"fade-left\">
                        <h3>
                            ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_sub_title", [], "any", false, false, true, 22), 0, [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "
                        </h3>
                        <p class=\"fst-italic\">
                            ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_description_1", [], "any", false, false, true, 25), 0, [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "
                        </p>
                        <div>
                            <ul class=\"row\">
                                ";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_details", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "
                            </ul>
                        </div>
                    <p>
                        ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_description_2", [], "any", false, false, true, 33), 0, [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "
                    </p>
                </div>
            </div>

        </div>
    </section>

<!-- End About Section -->

";
    }

    public function getTemplateName()
    {
        return "themes/custom/portfolio/templates/paragraphs/paragraph--about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  84 => 29,  77 => 25,  71 => 22,  64 => 18,  55 => 12,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/portfolio/templates/paragraphs/paragraph--about.html.twig", "/opt/lampp/htdocs/php/ajish-portfolio/themes/custom/portfolio/templates/paragraphs/paragraph--about.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 9);
        static $functions = array("file_url" => 18);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['file_url']
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
