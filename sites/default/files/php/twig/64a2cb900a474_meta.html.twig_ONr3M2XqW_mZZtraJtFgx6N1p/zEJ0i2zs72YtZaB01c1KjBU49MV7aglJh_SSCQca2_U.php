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

/* themes/custom/portfolio/templates/components/meta.html.twig */
class __TwigTemplate_3b5fccb6e9073995a9a301749d29a04d8d62d916aa45e47e2acb806018f3b1c1 extends \Twig\Template
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
        echo "<meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>iPortfolio Bootstrap Template - Index</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 9, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 9, $this->source)), "html", null, true);
        echo "/img/favicon.png\" rel=\"icon\">
  <link href=\"";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 10, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 10, $this->source)), "html", null, true);
        echo "/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 16, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 16, $this->source)), "html", null, true);
        echo "/vendor/aos/aos.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 17, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 17, $this->source)), "html", null, true);
        echo "/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 18, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 18, $this->source)), "html", null, true);
        echo "/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 19, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 19, $this->source)), "html", null, true);
        echo "/vendor/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 20, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 20, $this->source)), "html", null, true);
        echo "/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 21, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 21, $this->source)), "html", null, true);
        echo "/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 24, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 24, $this->source)), "html", null, true);
        echo "/css/style.css\" rel=\"stylesheet\">";
    }

    public function getTemplateName()
    {
        return "themes/custom/portfolio/templates/components/meta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  53 => 10,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/portfolio/templates/components/meta.html.twig", "/opt/lampp/htdocs/php/ajish-portfolio/themes/custom/portfolio/templates/components/meta.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
