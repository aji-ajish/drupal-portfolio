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

/* themes/custom/portfolio/templates/layout/region--header.html.twig */
class __TwigTemplate_16a1b49eebd1db22fcee9a689bc474cba3d5b5faa01f84a98bf5604fc36b30bb extends \Twig\Template
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
        echo "<!-- ======= Mobile nav toggle button ======= -->
<i class=\"bi bi-list mobile-nav-toggle d-xl-none\"></i>

<!-- ======= Header ======= -->
<header id=\"header\">
  <div class=\"d-flex flex-column\">

\t<div class=\"profile\">
\t  <img src=\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 9, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 9, $this->source)), "html", null, true);
        echo "/image/profile-img.jpg\" alt=\"\" class=\"img-fluid rounded-circle\">
\t  <h1 class=\"text-light\"><a href=\"index.html\">Alex Smith</a></h1>
\t  <div class=\"social-links mt-3 text-center\">
\t\t<a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
\t\t<a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
\t\t<a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
\t\t<a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
\t\t<a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
\t  </div>
\t</div>


  
\t<nav id=\"navbar\" class=\"nav-menu navbar\">
\t  <ul>
\t\t<li><a href=\"#hero\" class=\"nav-link scrollto active\"><i class=\"bx bx-home\"></i> <span>Home</span></a></li>
\t\t<li><a href=\"#about\" class=\"nav-link scrollto\"><i class=\"bx bx-user\"></i> <span>About</span></a></li>
\t\t<li><a href=\"#resume\" class=\"nav-link scrollto\"><i class=\"bx bx-file-blank\"></i> <span>Resume</span></a></li>
\t\t<li><a href=\"#portfolio\" class=\"nav-link scrollto\"><i class=\"bx bx-book-content\"></i> <span>Portfolio</span></a></li>
\t\t<li><a href=\"#services\" class=\"nav-link scrollto\"><i class=\"bx bx-server\"></i> <span>Services</span></a></li>
\t\t<li><a href=\"#contact\" class=\"nav-link scrollto\"><i class=\"bx bx-envelope\"></i> <span>Contact</span></a></li>
\t  </ul>
\t</nav><!-- .nav-menu -->
  </div>
</header><!-- End Header -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/portfolio/templates/layout/region--header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/portfolio/templates/layout/region--header.html.twig", "/opt/lampp/htdocs/php/ajish-portfolio/themes/custom/portfolio/templates/layout/region--header.html.twig");
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
